@extends('layouts.app')
@section('title')
    category show
@endsection

@section('content')
<div class="container">

    <h1>Category {{$category->slug}}:</h1>
    <hr>
    @foreach($posts as $post)
    <ul>
        <p>title:  {{$post->title}}</p>
        <p> Description: {{  \Illuminate\Support\Str::words($post->description,10) }}</p>
        <p><a href="{{route('categories.posts.show',[$category->id,$post->id])}}" class="btn btn-default">read more</a></p>
    </ul>
        <hr>
    @endforeach

</div>

@endsection
