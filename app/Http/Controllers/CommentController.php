<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use App\User;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function get_comments(Article $article) 
    {
        foreach($article->comments as $comment) {
            $comment->user = $comment->user;
        }
        return $article->comments;
    }
 
    public function store(Comment $comment, Article $article, Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->text;
        $comment->user_id = Auth::id();
        $comment->article_id = $request->article_id;
        
        $comment->save();
        return redirect()->back();
    }
 
    public function update(Article $article, Comment $comment, Request $request)
    {
        if(Auth::id() == $comment->user_id) {
            $comment->text = $request->text;
            $comment->save();
        }
    }
 
    public function destroy(Article $article, Comment $comment)
    {
        if(Auth::id() == $comment->user_id || Auth::id() == $article->user_id) {
            $comment->delete();
        }
    }
}
