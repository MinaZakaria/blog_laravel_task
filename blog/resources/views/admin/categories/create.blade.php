@extends('../../layouts/app')
@section('title')
    categories create
@endsection

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action='/admin/category' >
        {{csrf_field()}}
        <label> Enter slug</label>
        <input type="text" name="slug">
            <br>
        <label> Enter English Name</label>
        <input type="text" name="name">
            <br>
        <label> Enter Arabic Name</label>
        <input type="text" name="name">

        <input type="submit" value="Save category" >

    </form>
@endsection
