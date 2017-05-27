@extends('../../layouts/app')
@section('title')
    post show
@endsection

@section('content')
<div class="container">
    <table class="table table-striped" border="1">
      <thead>
          <th>title</th><th>Description</th><th colspan="3">action</th>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>

              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td>
                  <form method="post" action="{{route('post.destroy',$post->id)}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <div class="form-group">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <button type="submit" class="btn btn-primary">Delete</button>
                      </div>
                  </form>
              </td>
              <td><a class="btn btn-danger" href="{{route('post.edit',$post->id)}}">Edit</a></td>
              <td><a class="btn btn-danger" href="{{route('post.show',$post->id)}}">Show</a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
</div>


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
