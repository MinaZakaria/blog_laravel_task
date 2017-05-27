@extends('layouts.admin')
@section('title')
    posts index
@endsection

@section('body')

    welcome from index
    <ul>
      <li>posts</li>
        @foreach($posts as $post)
            <li>Title:->  {{$post->title}}</li>
            <li> Description:-> {{$post->description}}</li>
               <br>

            <ul>
                <li>All Comments</li>
                @foreach($post->comments as $comment)
                    <li>Comment:->  {{$comment->content}}</li>

                @endforeach
            </ul>
                 @endforeach
              </ul>


@endsection
