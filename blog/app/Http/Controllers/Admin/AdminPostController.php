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

    public function create()
    {
        //
        $categories= Category::all();
        return view('admin.posts.create',['categories'=>$categories]);
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->category_id=$request->category_id;
        $post->image=$_FILES['image']['name'];
        $post->save();
        $post->title = $request->en_title;
        $post->description= $request->en_description;
        $post->translateOrNew('ar')->title = $request->ar_title;
        $post->translateOrNew('ar')->description= $request->ar_description;
        $post->save();
        move_uploaded_file($_FILES['image']['tmp_name'],'imgs/'.$_FILES['image']['name']);

        return redirect('admin/post');
    }

    public function destroy($id){
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
    public function edit($id){
        $post=Post::find($id);
        $categories= Category::all();
        return view('admin.posts.edit',['post'=> $post,'categories'=>$categories]);

    }
    public function update(Request $request,$id)
    {

        $post = Post::find($id);
        $post->category_id=$request->category_id;
        $post->image=$_FILES['image']['name'];
        $post->save();
        $post->title = $request->en_title;
        $post->description= $request->en_description;
        $post->translateOrNew('ar')->title = $request->ar_title;
        $post->translateOrNew('ar')->description= $request->ar_description;
        $post->save();
        move_uploaded_file($_FILES['image']['tmp_name'],'imgs/'.$_FILES['image']['name']);
        return redirect()->route('post.index');

    }
    public function show($id){
        $post=Post::find($id);
        $category=Category::find($post->category_id);
        $category_slug=$category->slug;
        return view('admin.posts.show',['post'=>$post,'category_slug'=>$category_slug]);
    }

}
