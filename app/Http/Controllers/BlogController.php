<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
      public function getindex(){
      	$posts=Post::paginate(10);
      	return view('blog.index')->withPosts($posts);

      }

      public function getsingle($slugs){
      	//fetch post according to slugs
      	$post=Post::where('slugs','=',$slugs)->first();

      	return view('blog.single')->withPosts($post);
      }
}
