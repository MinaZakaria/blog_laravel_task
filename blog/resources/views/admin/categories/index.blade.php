@extends('../../layouts/adminLayout')
@section('title')
    category show
@endsection

@section('content')
<div class="container">
    <a class="btn btn-danger" href='/admin/category/create'>Create</a>
    <br>
        <table class="table table-striped" border="1">
          <thead>
              <th>Slug</th><th>Name</th><th  colspan="3">action</th>
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
                           <button type="submit" class="btn btn-primary">Delete</button>
                           </div>
                        </form>
                    </td>
                    <td><a class="btn btn-danger" href='/admin/category/{{$category->id}}/edit'>Edit</a></td>
                    <td><a class="btn btn-danger" href='/admin/category/{{$category->id}}'>Show</a></td>
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
