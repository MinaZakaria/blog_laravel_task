<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminPostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin');
        $posts= Post::all();
        return view('admin.posts.index',['posts'=>$posts]);
    }

    // public function posts()
    // {
    //     $posts= Post::all();
    //     return view('admin.posts.index',['posts'=>$posts]);
    // }
    public function destroy($id){
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
    public function edit($id){
        $post=Post::find($id);
        return view('admin.posts.edit',['post'=> $post]);

    }
    public function update(Request $request,$id)
    {
        move_uploaded_file($_FILES['image']['name'],'imgs/'.$_FILES['image']['name']);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->image = $_FILES['image']['name'];
        $post->description = $request->description;
        $post->save();

        return redirect()->route('post.index');

    }
    public function show($id){
        $post=Post::find($id);
        $category=Category::find($post->category_id);
        $category_name=$category->name;
        return view('admin.posts.show',['post'=>$post,'category_name'=>$category_name]);
    }

}
