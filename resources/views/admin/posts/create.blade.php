@extends('layouts.admin')


@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose Category']+$category,null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('photo_id','Profile Pic') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Desciption:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@stop
