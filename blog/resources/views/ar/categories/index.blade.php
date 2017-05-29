@extends('layouts.app')
@section('title')
    categories index
@endsection

@section('content')
<div class="container">
    <h1>كل المجالات</h1>
    @foreach($categories as $category)
    <ul>
        <li><a href="{{route('category.show',$category->id)}}">{{$category->slug}}</a></li>
    </ul>
        <hr>
    @endforeach
</div>

@endsection
