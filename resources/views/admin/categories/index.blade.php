@extends('layouts.admin')


@section('content')
    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>


    <div class="col-sm-6">
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($categories)
        @foreach($categories as $categorie)
            <tr>
                <td>{{$categorie->id}}</td>
                <td><a href="{{route('admin.cat.edit',$categorie->id)}}">{{$categorie->name}}</a></td>
                <td>{{$categorie->created_at}}</td>
                <td>{{$categorie->updated_at}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
    </div>

@stop