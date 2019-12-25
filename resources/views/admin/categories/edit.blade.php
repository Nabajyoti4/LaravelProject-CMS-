@extends('layouts.admin')


@section('content')
    <h1>Edit Categories</h1>

    {!! Form::model($categories,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$categories->id]]) !!}

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::model($categories,['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$categories->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete category',['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    {!! Form::close() !!}

    @stop
