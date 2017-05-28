@extends('../../layouts/app')
@section('title')
    post show
@endsection

@section('content')

    <ul>
      <li>First Name:  {{$user->first_name}}</li>
      <li>Last Name: {{$user->last_name}}</li>
      <li>Email: {{$user->email}}</li>
    </ul>

@endsection
