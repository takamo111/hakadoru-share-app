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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Comment $comment, Article $article, Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->text;
        $comment->comment_rating = $request->comment_rating;
        $comment->user_id = Auth::id();
        $comment->article_id = $request->article_id;
        
        $comment->save();
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        return redirect('/');
    }
 
    
}
