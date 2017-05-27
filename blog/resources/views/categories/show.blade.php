@extends('layouts.admin')
@section('title')
    category show
@endsection

@section('body')

    welcome from show category
    <ul>
      <li>Title:->  {{$category->title}}</li>
      <li> Description:-> {{$category->description}}</li>

    </ul>

    <li>All Comments</li>
      @foreach($comments as $comment)
          <li>Comment:->  {{$comment->content}}</li>
               @endforeach
            </ul>




          @if(count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          {{--<form method="category" action="/categorys">--}}
          <form method="category" action="{{route('comment.store',$category->id)}}">
              {{csrf_field()}}
              <label> Enter comment</label>
              <input type="text" name="content">
              <br>

              <input type="submit" value="comment" >

          </form>
@endsection
