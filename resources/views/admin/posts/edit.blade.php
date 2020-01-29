@extends('layouts.admin')


@section('content')
    @include('includes.tinyeditor')
    <h1>Edit Posts</h1>

    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>

    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}

    <div class="col-sm-9">
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
        {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::model($post,['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id],'files'=>true]) !!}
    <div class="form-group">
        {!! Form::submit('Delete User',['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@stop