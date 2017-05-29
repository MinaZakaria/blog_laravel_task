@extends('../../layouts/adminLayout')
@section('title')
    categories create
@endsection

@section('content')

        <form method="POST" action='/admin/category'>
        {{csrf_field()}}
        <label> Enter slug</label>
        <input type="text" name="slug">
            <br>
        <label> Enter English Name</label>
        <input type="text" name="en_name">
            <br>
        <label> Enter Arabic Name</label>
        <input type="text" name="ar_name">

        <input type="submit" value="Save category" >

    </form>
@endsection
