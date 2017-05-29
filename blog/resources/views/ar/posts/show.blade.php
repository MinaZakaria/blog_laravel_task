@extends('layouts.app')
@section('title')
    post show
@endsection

@section('content')
<div class="container">
    <h1>بوستك المفضل</h1>
        <ul>
            <strong>العنوان </strong>
            <p>{{$post->title}}</p>
            <br>
            <strong>:الوصف </strong>
            <p>{{$post->description}}</p>
            <br>
          <li><img src="/imgs/{{$post->image}}" alt=""></li>
        </ul>
</div>

@endsection
