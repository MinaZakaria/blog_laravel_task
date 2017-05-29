@extends('../../layouts/adminLayout')
@section('title')
    Edit Post
@endsection

@section('content')

    <form method="POST" action="{{route('post.update',$post->id)}}" enctype= "multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Edit english title</label>
        <input type="text" name="en_title" value="{{$post->title}}">
        <br>
        <label> Edit arabic title</label>
        <input type="text" name="ar_title" value="{{$post->getTranslation('ar')->title}}">
        <br>
        <label> Edit english description</label>
        <textarea name="en_description" rows="4" cols="40">{{$post->description}}</textarea>
        <br>
        <label> Edit arabic description</label>
        <textarea name="ar_description" rows="4" cols="40">{{$post->getTranslation('ar')->description}}</textarea>
        <br>
        <label> Edit category</label>
        <input type=""text name="category_id" value="{{$post->category_id}}">
        <br>
        <label> Edit image</label>
        <input type="file" name="image">
        <hr>
        <input type="submit" value="Update post" >
    </form>
@endsection
