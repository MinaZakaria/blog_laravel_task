@extends('../../layouts/app')
@section('title')
    users list
@endsection

@section('content')

    <table class="table table-striped" border="1">
      <thead>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Date Of Birth</th>
          <th>Gender</th>
          <th  colspan="4">action</th>
      </thead>
      <tbody>
          @foreach ($users as $user)
          <tr>

                  <td>{{$user->first_name}}</td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->date_of_birth}}</td>
                  <td>{{$user->gender}}</td>
                  <td>


                  @if ($user->is_active == 1)
                  <a class="btn btn-danger" href="{{route('user.block_user',$user->id)}}">Block</a>
                  @else
                  <a class="btn btn-danger" href="{{route('user.active_user',$user->id)}}">Un Block</a>

                  @endif
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
