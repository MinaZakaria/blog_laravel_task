<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    public function show($cat_id,$post_id)
    {
        //
        $post=Post::find($post_id);
        return view('posts.show',['post'=>$post]);
    }

}
