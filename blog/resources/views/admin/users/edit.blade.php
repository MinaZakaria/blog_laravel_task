@extends('../../layouts/adminLayout')
@section('title')
    Edit user
@endsection

@section('content')

    <form method="POST" action="{{route('user.update',$user->id)}}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Edit first name</label>
        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
        <br>
        <label> Edit last name</label>
        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
        <br>
        <label> Edit email</label>
        <input type="email" name="email" value="{{$user->email}}" class="form-control">

        <hr>
        <input type="submit" value="Update user" class="btn btn-primary">
    </form>
@endsection
