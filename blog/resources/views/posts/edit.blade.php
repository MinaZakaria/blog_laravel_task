@extends('layouts.admin')
@section('title')
    posts create
@endsection

@section('body')

    welcome from create post
    <form method="POST" action="{{route('post.update',['id'=>$post->id])}}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Enter title</label>
        <input type="text" name="title" value="{{$post->title}}">
        <br>
        <label> Enter description</label>
        <input type=""text name="description" value="{{$post->description}}">
        <input type="submit" value="Save post" >

    </form>
@endsection
