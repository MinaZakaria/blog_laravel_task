@extends('../../layouts/adminLayout')
@section('title')
    categories create
@endsection

@section('content')

        <form method="POST" action='/admin/user' >
        {{csrf_field()}}
        <label> Enter first name</label>
        <input type="text" name="first_name">
            <br>
        <label> Enter last name</label>
        <input type="text" name="last_name">
            <br>
        <label> Enter Email</label>
        <input type="text" name="email">
            <br>
        <label> Enter password</label>
        <input type="password" name="password">

        <input type="submit" value="Save user" >

    </form>
@endsection
