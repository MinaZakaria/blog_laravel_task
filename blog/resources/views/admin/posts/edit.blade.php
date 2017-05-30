@extends('../../layouts/adminLayout')
@section('title')
    Edit Post
@endsection

@section('content')

    <form method="POST" action="{{route('post.update',$post->id)}}" enctype= "multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label> Edit english title</label>
        <input type="text" name="en_title" value="{{$post->title}}" class="form-control">
        <br>
        <label> Edit arabic title</label>
        <input type="text" name="ar_title" value="{{$post->getTranslation('ar')->title}}" class="form-control">
        <br>
        <label> Edit english description</label>
        <textarea name="en_description" rows="4" cols="40" class="form-control">{{$post->description}}</textarea>
        <br>
        <label> Edit arabic description</label>
        <textarea name="ar_description" rows="4" cols="40" class="form-control">{{$post->getTranslation('ar')->description}}</textarea>
        <br>
        <label> Edit category</label>
        <select id="category_id" name="category_id" class="form-control">
            @foreach ($categories as $category)
                @if ($category->id == $post->category_id)
                    <option value="{{ $category->id }}" selected="selected">{{$category->slug }}</option>
                @else
                    <option value="{{ $category->id }}">{{$category->slug }}</option>
                @endif
            @endforeach
       </select>
        <br>
        <label> Edit image</label>
        <input type="file" name="image">
        <hr>
        <input type="submit" value="Update post"  class="btn btn-primary">
    </form>
@endsection
