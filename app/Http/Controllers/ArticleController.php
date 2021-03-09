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
        }


        public function create()
        {
                return view('articles.create');

        }
                    

        

        public function store(ArticleRequest $request, Article $article)
        {

            $items = '';

            //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成します
            $client = new RakutenRws_Client();

            //定数化
            define("RAKUTEN_APPLICATION_ID"     , config('app.rakuten_id'));
            define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));
    
            //アプリIDをセット
            $client->setApplicationId(RAKUTEN_APPLICATION_ID);
    
            //リクエストから検索キーワードを取り出し
            $itemcode = $request->input('itemCode');
    
            // IchibaItemSearch API から、指定条件で検索
            if(!empty($itemcode)){ 
            $response = $client->execute('IchibaItemSearch', array(
                //入力パラメーター
                'itemCode' => $itemcode,
            ));
            // レスポンスが正しいかを isOk() で確認
            if ($response->isOk()) {
            $items = array();
            foreach ($response as $item){
                $article->r_image_url_a = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']);
                $article->r_image_url_b = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][1]['imageUrl']);
                $article->r_image_url_c = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][2]['imageUrl']);
                $article->r_name = $item['itemName'];
                $article->r_caption = $item['itemCaption'];
                $article->r_item_url = $item['itemUrl'];
                $article->r_price = $item['itemPrice'];
                $article->r_shop = $item['shopName'];
            }
            } else {
                echo 'Error:'.$response->getMessage();
              }
    
            } 

            $article->genre_id = $request->genre_id;
            $article->title = $request->title;
            $article->body = $request->body;
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

    

