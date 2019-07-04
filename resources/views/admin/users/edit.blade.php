@extends('layouts.admin')


@section('content')

    @if(Session::has('updated_user'))
      <p class="bg-danger">{{ session('updated_user') }}</p>
    @endif

    <h1>Edit User</h1>

    <div style="margin-bottom: 50px;" class="row">
        <div class="col-sm-3">
            <img src="{{ $user->photo ? $user->photo->file : '' }}" class="img img-responsive img-rounded">
        </div>
    
    <div class="col-sm-9 mb-4">
    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
    {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('is_active', 'Status') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>"Inactive"), null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Title') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary pull-left']) !!}
        </div>


    {!! Form::close() !!}

    <!-- Delete user form-->

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
    {{csrf_field()}}

        <div class="form-group">
            {!! Form::submit('Delete user', ['class'=>'btn btn-danger pull-right']) !!}
        </div>

    {!! Form::close() !!}


    @include('includes.errors')

    </div></div>
    
@stop