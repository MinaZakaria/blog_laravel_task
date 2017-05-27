@extends('../../layouts/app')
@section('title')
    category show
@endsection

@section('content')
<a class="btn btn-danger" href="{{route('category.create')}}">Create</a>

    <table class="table table-striped" border="1">
      <thead>
          <th>title</th><th>Image</th><th  colspan="4">action</th>
      </thead>
      <tbody>
          @foreach ($categories as $category)
          <tr>

                  <td>{{$category->title}}</td>
                  <td>{{$category->image}}</td>
                  <td><form method="post" action="{{route('category.destroy',$category->id)}}">
                  <input name="_method" type="hidden" value="DELETE">
                  <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <button type="submit" class="btn btn-primary">Delete</button>
                       </div>
                    </form>
                  <a class="btn btn-danger" href="{{route('category.edit',$category->id)}}">Edit</a>
                  <a class="btn btn-danger" href="{{route('category.show',$category->id)}}">Show</a>


                </td>

          </tr>
          @endforeach
      </tbody>
    </table>

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
