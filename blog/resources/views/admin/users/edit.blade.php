@extends('../../layouts/adminLayout')
@section('title')
    Edit Post
@endsection

@section('content')

    <form method="POST" action="{{route('user.update',$user->id)}}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Edit first name</label>
        <input type="text" name="first_name" value="{{$user->first_name}}">
        <br>
        <label> Edit last name</label>
        <input type="text" name="last_name" value="{{$user->last_name}}">
        <br>
        <label> Edit email</label>
        <input type="email" name="email" value="{{$user->email}}">

        <hr>
        <input type="submit" value="Update user" >
    </form>
@endsection
