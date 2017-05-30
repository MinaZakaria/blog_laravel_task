@extends('../../layouts/adminLayout')
@section('title')
    All categories
@endsection

@section('content')
<div class="container">
    <a href='/admin/category/create' class="btn btn-success">Create</a>
    <br>
        <table class="table table-striped" border="1">
          <thead>
              <th>Slug</th><th>Name</th><th colspan="3">action</th>
          </thead>
          <tbody>
              @foreach ($categories as $category)
              <tr>

                      <td>{{$category->slug}}</td>
                      <td>{{$category->name}}</td>
                      <td><form method="post" action='/admin/category/{{$category->id}}'>
                      <input name="_method" type="hidden" value="DELETE">
                      <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <button type="submit" class="btn btn-danger">Delete</button>
                           </div>
                        </form>
                    </td>
                    <td><a class="btn btn-warning" href='/admin/category/{{$category->id}}/edit'>Edit</a></td>
                    <td><a class="btn btn-primary" href='/admin/category/{{$category->id}}'>Show</a></td>
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
