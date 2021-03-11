<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function get_comments(Article $article) 
    {
        foreach($article->comments as $comment) {
            $comment->user = $comment->user;
        }
        return $article->comments;
    }
 
    public function store(Article $article, Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->comment;
        $comment->user_id = Auth::id();
        
        $article->comments()->save($comment);
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
