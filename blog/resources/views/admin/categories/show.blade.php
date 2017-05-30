@extends('../../layouts/adminLayout')
@section('title')
    show category 
@endsection

@section('content')
    <ul>
      <li>Slug:  {{$category->slug}}</li>
      <li>English Name: {{$category->name}}</li>
      <li>Arabic Name: {{$category->getTranslation('ar')->name}}</li>
    </ul>

@endsection
