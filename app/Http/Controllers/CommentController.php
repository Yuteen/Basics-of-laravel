<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Comment;

class CommentController extends Controller
{
    public function insertComment(Request $request , Comment $comment)
    {        
        $comment->body = $request->get('body');
        $comment->post_id = $request->get('post_id');
        $comment->save();
        return back();
    }
}
