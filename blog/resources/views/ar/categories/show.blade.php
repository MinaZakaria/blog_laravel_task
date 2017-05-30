@extends('layouts.app')
@section('title')
    category show
@endsection

@section('content')
<div class="container">

    <h1>{{$category->slug}} مجال </h1>
    <hr>
    @foreach($posts as $post)
    <ul>
        <strong>العنوان </strong>
        <p>{{$post->title}}</p>
        <br>
        <strong>الوصف</strong>
        <p>{{  \Illuminate\Support\Str::words($post->description,10) }}</p>
        <p><a href="{{route('categories.posts.show',[$category->id,$post->id])}}" class="btn btn-default">اقرا المزيد</a></p>
    </ul>
        <hr>
    @endforeach

</div>
    {{ $posts->links() }}

@endsection
