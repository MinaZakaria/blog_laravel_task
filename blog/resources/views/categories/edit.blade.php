@extends('layouts.admin')
@section('title')
    categories create
@endsection

@section('body')

    welcome from create category
    <form method="POST" action="{{route('category.update',['id'=>$category->id])}}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Enter title</label>
        <input type="text" name="title" value="{{$category->title}}">
        <br>
        <label> Enter description</label>
        <input type=""text name="description" value="{{$category->description}}">
        <input type="submit" value="Save category" >

    </form>
@endsection
