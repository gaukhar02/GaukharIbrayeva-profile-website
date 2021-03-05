<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index1(){
            $post=Post::all();

            return view('blog.index1')->with(['post'=>$post]);
        }

          public function store(Request $request){
               Post::create([
                    'title' => $request->title,
                    'body' => $request->body,
                    ]);
                    return back();
          }
}
