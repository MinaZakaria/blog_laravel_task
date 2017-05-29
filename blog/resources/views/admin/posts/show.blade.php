@extends('../../layouts/adminLayout')
@section('title')
    post show
@endsection

@section('content')
<div class="container">
    <ul>
        <li>Category: {{$category_name}}</li>
        <li>Englesh Title:  {{$post->title}}</li>
        <li>Arabic Title:  {{$post->getTranslation('ar')->title}}</li>
        <li>English Description: {{$post->description}}</li>
        <li>Arabic Description: {{$post->getTranslation('ar')->description}}</li>
        <li><img src="/imgs/{{$post->image}}" ></li>
    </ul>
</div>


@endsection
