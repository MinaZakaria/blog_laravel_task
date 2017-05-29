@extends('layouts.app')
@section('title')
    post show
@endsection

@section('content')
<div class="container">
    <h1>Your Favourite Post</h1>
        <ul>
          <li>Title:  {{$post->title}}</li>
          <li> Description: {{$post->description}}</li>
          <li><img src="/imgs/{{$post->image}}" alt=""></li>
        </ul>
</div>

@endsection
