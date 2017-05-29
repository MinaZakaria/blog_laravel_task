@extends('../../layouts/adminLayout')
@section('title')
    categories create
@endsection

@section('content')

        <form method="POST" action='/admin/post' enctype="multipart/form-data">
        {{csrf_field()}}
        <label> Enter category</label>
        <input type="text" name="category_id">
            <br>
        <label> Enter English title</label>
        <input type="text" name="en_title">
            <br>
        <label> Enter Arabic title</label>
        <input type="text" name="ar_title">
            <br>
        <label> Enter English description</label>
        <input type="text" name="en_description">
            <br>
        <label> Enter Arabic description</label>
        <input type="text" name="ar_description">
            <br>
        <label> upload image</label>
        <input type="file" name="image">

        <input type="submit" value="Save post" >

    </form>
@endsection
