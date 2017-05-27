@extends('layouts.app')
@section('title')
    categories index
@endsection

@section('content')
<container>
    <h1>All categories</h1>
    @foreach($categories as $category)
        <li>Title:->  {{$category->slug}}</li>
        <li> Description:-> {{$category->description}}</li>
        <br>
    @endforeach
</container>




@endsection
