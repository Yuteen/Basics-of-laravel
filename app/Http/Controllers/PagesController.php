<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Post;

class PagesController extends Controller
{
    //
    public function show()
    {
    	return view('layouts/layout');
    }
    public function make_model()
    {
    	//$posts = DB::table('posts')->get();
    	//return view('layouts/layout',compact('posts'));
    	$posts = new Post;
    	$posts->title='Post Title 3';
    	$posts->description='Post Description 3';
    	$posts->save();
    }
}
