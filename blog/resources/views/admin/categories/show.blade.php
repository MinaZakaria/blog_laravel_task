@extends('../../layouts/app')
@section('title')
    post show
@endsection

@section('content')

    welcome from show post
    <ul>
      <li>Slug:  {{$category->slug}}</li>
      <li>English Name: {{$category->name}}</li>
      <li>Arabic Name: {{$category->name}}</li>
    </ul>

@endsection
