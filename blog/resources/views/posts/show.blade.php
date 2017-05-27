@extends('layouts.admin')
@section('title')
    post show
@endsection

@section('body')

    welcome from show post
    <ul>
      <li>Title:->  {{$post->title}}</li>
      <li> Description:-> {{$post->description}}</li>

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

@endsection
