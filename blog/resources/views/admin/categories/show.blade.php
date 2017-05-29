@extends('../../layouts/adminLayout')
@section('title')
    post show
@endsection

@section('content')
    <ul>
      <li>Slug:  {{$category->slug}}</li>
      <li>English Name: {{$category->name}}</li>
      <li>Arabic Name: {{$category->getTranslation('ar')->name}}</li>
    </ul>

@endsection
