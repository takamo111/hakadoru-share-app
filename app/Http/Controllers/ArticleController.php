<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
        public function index()
        {
                $articles = Article::all()->sortByDesc('created_at');
                return view('articles.index', ['articles' => $articles]);
                    

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

    

