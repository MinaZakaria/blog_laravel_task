@extends('layouts/admin')
@section('title')
    posts create
@endsection

@section('body')

    welcome from create post
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form method="POST" action="{{route('categories.posts.store',['id'=>1])}}">
        {{csrf_field()}}
        <label> Enter title</label>
            <input type="text" name="title">
            <br>
            <input type="text" name="description">
        <input type="submit" value="Save post" >

    </form>
@endsection
