@extends('../../layouts/app')
@section('title')
    Edit Post
@endsection

@section('content')

    <form method="POST" action="{{route('post.update',$post->id)}}" enctype= "multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Edit english title</label>
        <input type="text" name="title" value="{{$post->title}}">
        <br>
        <label> Edit arabic title</label>
        <input type="text" name="title" value="{{$post->title}}">
        <br>
        <label> Edit english description</label>
        <textarea name="description" rows="4" cols="40">{{$post->description}}</textarea>
        <br>
        <label> Edit arabic description</label>
        <textarea name="description" rows="4" cols="40">{{$post->description}}</textarea>
        <br>
        <label> Edit category</label>
        <input type=""text name="category_id" value="{{$post->category_id}}">
        <br>
        <label> Edit image</label>
        <!-- <img src="/imgs/{{$post->image}}" alt="">
        <input type="text" name="image" value="{{$post->image}}"> -->
        <input type="file" name="image">
        <hr>
        <input type="submit" value="Update post" >
    </form>
@endsection
