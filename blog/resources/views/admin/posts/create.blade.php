@extends('../../layouts/adminLayout')
@section('title')
    create post
@endsection

@section('content')

        <form method="POST" action='/admin/post' enctype="multipart/form-data">
        {{csrf_field()}}

        <label> Enter category</label>
        <select id="category_id" name="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->slug }}</option>
            @endforeach
       </select>
            <br>
        <label> Enter English title</label>
        <input type="text" name="en_title" class="form-control">
            <br>
        <label> Enter Arabic title</label>
        <input type="text" name="ar_title" class="form-control">
            <br>
        <label> Enter English description</label>
        <input type="text" name="en_description" class="form-control">
            <br>
        <label> Enter Arabic description</label>
        <input type="text" name="ar_description" class="form-control">
            <br>
        <label> upload image</label>
        <input type="file" name="image">
            <br>
        <input type="submit" value="Save post" class="btn btn-primary">

    </form>
@endsection
