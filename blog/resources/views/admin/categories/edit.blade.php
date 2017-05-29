@extends('../../layouts/adminLayout')
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
        <input type="text" name="en_name" value="{{$category->name}}">
        <br>
        <label> Enter Arabic Name</label>
        <input type="text" name="ar_name" value="{{$category->getTranslation('ar')->name}}">
        <input type="submit" value="Update post" >

    </form>
@endsection
