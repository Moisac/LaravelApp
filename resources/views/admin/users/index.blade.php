@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
    
    @if($users)

        @foreach($users as $user)

      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role_id }}</td>
      <td>{{ $user->is_active==1 ? "Active" : 'No Active' }}</td>
      <td>{{ $user->created_at->diffForHumans() }}</td>
      <td>{{ $user->updated_at->diffForHumans() }}</td>
    </tr>

    @endforeach

    @endif

  </tbody>
</table>
@stop    