@extends('../../layouts/app')
@section('title')
    categories create
@endsection

@section('content')

    welcome from create categories
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <label> Enter title</label>
            <input type="text" name="title">
            <br>
            <label> Enter image</label>

            <input type="file" name="image">
        <input type="submit" value="Save category" >

    </form>
@endsection
