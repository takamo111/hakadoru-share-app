<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

use App\Article;

use RakutenRws_Client;

class ArticleController extends Controller
{
        public function index(Request $request)
        {
                $articles = Article::all()->sortByDesc('created_at');
                return view('articles.index', ['articles' => $articles]);
                var_dump($articles);
            
            
                
        //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成します
        $client = new RakutenRws_Client();

        //定数化
        define("RAKUTEN_APPLICATION_ID"     , config('app.rakuten_id'));
        define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));

        //アプリIDをセット！
        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        //リクエストから検索キーワードを取り出し
        $keyword = $request->input('keyword');

        // IchibaItemSearch API から、指定条件で検索
        if(!empty($keyword)){ 
        $response = $client->execute('IchibaItemSearch', array(
            //入力パラメーター
            'keyword' => $keyword,
        ));
        // レスポンスが正しいかを isOk() で確認することができます
        if ($response->isOk()) {
        $items = array();
        //配列で結果をぶち込んで行きます
        foreach ($response as $item){
            //画像サイズを変えたかったのでURLを整形します
            $str = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']);
            $items[] = array(
                'itemName' => $item['itemName'],
                'itemPrice' => $item['itemPrice'],
                'itemUrl' => $item['itemUrl'],
                'mediumImageUrls' => $str,
                'siteIcon' => "../images/rakuten_logo.png",
            );

        }
        } else {
            echo 'Error:'.$response->getMessage();
          }


        } 
    }


        public function create()
        {
                return view('articles.create');
                    

        }

        public function store(ArticleRequest $request, Article $article)
        {
            $article->genre_id = $request->genre_id;
            $article->title = $request->title;
            $article->body = $request->body;
            $article->image_url = $request->image_url;
            $article->user_id = $request->user()->id;
            $article->save();
            return redirect()->route('articles.index');
        }


        public function top ()

        {
                $articles = Article::all()->sortByDesc('created_at');
                return view('articles.top', ['articles' => $articles]);
                    

        }

        public function edit(Article $article)
        {
            return view('articles.edit', ['article' => $article]);    
        }

        public function update(ArticleRequest $request, Article $article)
        {
            $article->fill($request->all())->save();
            return redirect()->route('articles.index');
        }

        public function destroy(Article $article)
        {
            $article->delete();
            return redirect()->route('articles.index');
        }

        public function show(Article $article)
        {
            return view('articles.show', ['article' => $article]);
        }  
        
        public function like(Request $request, Article $article)
        {
            $article->likes()->detach($request->user()->id);
            $article->likes()->attach($request->user()->id);
    
            return [
                'id' => $article->id,
                'countLikes' => $article->count_likes,
            ];
        }
    
        public function unlike(Request $request, Article $article)
        {
            $article->likes()->detach($request->user()->id);
    
            return [
                'id' => $article->id,
                'countLikes' => $article->count_likes,
            ];
        }

    }

    

