@extends('layouts.admin')


@section('content')

<h1>Create new post</h1>


{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
    {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category', array(1=>'PHP', 2=>'JS'), null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('body', 'Content') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>
       


        <div class="form-group">
            {!! Form::submit('Add Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    <div class="row">    
         @include('includes.errors')
    </div>
@stop