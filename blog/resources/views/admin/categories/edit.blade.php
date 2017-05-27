@extends('../../layouts/app')
@section('title')
    Edit Post
@endsection

@section('content')

    welcome from Edit post
    <form method="POST" action="{{route('category.update',$category->id)}}}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Enter title</label>
        <input type="text" name="title" value="{{$category->title}}">
        <br>
        <label> Enter description</label>
        <input type=""text name="image" value="{{$category->image}}">
        <input type="submit" value="Update post" >

    </form>
@endsection
