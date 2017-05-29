<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{

    public function index()
    {
        $categories= Category::all();
        return view('categories.index',['categories'=>$categories]);
    }

    public function show($id)
    {
        $category=Category::find($id);
        $posts=Post::where('category_id','=', $id)->get();
        return view('categories.show',['category'=>$category, 'posts'=>$posts]);

    }

}
