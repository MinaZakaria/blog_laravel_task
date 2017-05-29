@extends('../../layouts/adminLayout')

@section('content')
<div class="container">
    <a class="btn btn-danger" href='/admin/user/create'>Create</a>
    <table class="table table-striped" border="1">
      <thead>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>

          <th  colspan="3">action</th>
      </thead>
      <tbody>
          @foreach ($users as $user)
          <tr>

                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->email}}</td>

                  <td>
                      <form method="post" action="{{route('user.destroy',$user->id)}}">
                          <input name="_method" type="hidden" value="DELETE">
                          <div class="form-group">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <button type="submit" class="btn btn-primary">Delete</button>
                          </div>
                      </form>
                  </td>
                  <td><a class="btn btn-danger" href="{{route('user.edit',$user->id)}}">Edit</a></td>
                  <td><a class="btn btn-danger" href="{{route('user.show',$user->id)}}">Show</a></td>

          </tr>
          @endforeach
      </tbody>
    </table>
</div>

@endsection
