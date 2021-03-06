@extends('../../layouts/adminLayout')
@section('title')
    All posts
@endsection

@section('content')
<div class="container">
    <a href='/admin/post/create' class="btn btn-success">Create</a>
    <table class="table table-striped" border="1">
      <thead>
          <th>title</th><th colspan="3">action</th>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
              <td>{{$post->title}}</td>
              <td>
                  <form method="post" action="{{route('post.destroy',$post->id)}}">
                      <input name="_method" type="hidden" value="DELETE">
                      <div class="form-group">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                  </form>
              </td>
              <td><a class="btn btn-warning" href="{{route('post.edit',$post->id)}}">Edit</a></td>
              <td><a class="btn btn-primary" href="{{route('post.show',$post->id)}}">Show</a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
</div>

@endsection
