@extends('../../layouts/adminLayout')
@section('title')
    create category
@endsection

@section('content')
    <form method="POST" action='/admin/category'>
        {{csrf_field()}}
        <label> Enter slug</label>
        <input type="text" name="slug" class="form-control">
            <br>
        <label> Enter English Name</label>
        <input type="text" name="en_name" class="form-control">
            <br>
        <label> Enter Arabic Name</label>
        <input type="text" name="ar_name" class="form-control">
            <br>
        <input type="submit" value="Save category" class="btn btn-primary">
    </form>
@endsection
