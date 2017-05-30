<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use DB;
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
        // $posts = DB::table('posts')->simplePaginate(15);
        $posts=Post::where('category_id','=', $id)->simplePaginate(10);
        return view('categories.show',['category'=>$category, 'posts'=>$posts]);

    }

}
