@extends('../../layouts/adminLayout')
@section('title')
    create user 
@endsection

@section('content')

        <form method="POST" action='/admin/user' >
        {{csrf_field()}}
        <label> Enter first name</label>
        <input type="text" name="first_name" class="form-control">
            <br>
        <label> Enter last name</label>
        <input type="text" name="last_name" class="form-control">
            <br>
        <label> Enter Email</label>
        <input type="text" name="email" class="form-control">
            <br>
        <label> Enter password</label>
        <input type="password" name="password" class="form-control">
            <br>
        <input type="submit" value="Save user" class="btn btn-primary">

    </form>
@endsection
