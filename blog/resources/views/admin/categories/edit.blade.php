@extends('../../layouts/app')
@section('title')
    Edit Post
@endsection

@section('content')

    <form method="POST" action='/admin/category/{{$category->id}}'>
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Enter slug</label>
        <input type="text" name="slug" value="{{$category->slug}}">
        <br>
        <label> Enter English Name</label>
        <input type=""text name="name" value="{{$category->name}}">
        <br>
        <label> Enter Arabic Name</label>
        <input type=""text name="name" value="{{$category->name}}">
        <input type="submit" value="Update post" >

    </form>
@endsection
