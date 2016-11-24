<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Post;
use App\Comment;
use App\Tag;
class PostController extends Controller
{
    //
    public function post_model()
    {
    	$post = new Post();
    	// 
    	//$result =DB::table('posts')->get();
    	//$result = $post->get();
    	//return view('layouts.post',compact('result'));

    	$comment = new Comment();
    	//$result = $post->find(2)->comments()->get();
    	//dd($result);
    	//$tag = new Tag();
    	//$result = $post->first()->tags()->get();
    	//return view('layouts.post',compact('result'));
        $result = $post->get();
        //dd($result);
        return view('layouts.post',compact('result'));
    }

    public function insert(Request $request , Post $post)
    {
        //$comment = new Comment();
        
        $post->title = $request->get('title');
        $post->description = $request->get('description');
       //dd('hello');
        //dd($request->all());
        //dd($request->get('description'));
        //return "u3";
        //dd($request->only('_token'));
        //dd($request->except('_token'));
        $post->save();
        return back();
    }

    public function select(Request $request)
    {
        $post = new Post;
        $comment = new Comment;
        $id = $request->get('post_id');
        //$id = $post->id;
        $result =$post->find($id)->comments()->get();
        return view('layouts.comment',compact('result'));
    }

    public function selectTag(Request $request)
    {
        # code...
        $post = new Post;
        $comment = new Comment;
        $tag = new \App\Tag;

        $result = $comment->find($request->comment_id)->post()->first()->tags()->get();
        return view('layouts.tag',compact('result'));


    }
    public function update(Request $request)
    {
        // Post::
        //dd($request);
        return view('layouts.update',compact('request'));
    }
    public function updateComments(Request $request)
    {
        Post::find($request->post_id)->comments()->find($request->comment_id)->update(['body'=>$request->body]);
        //return view('layouts.update',compact('request'));
    }
}