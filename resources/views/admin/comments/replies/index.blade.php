@extends('layouts.admin')


@section('content')
    <h1>Posts Comments</h1>

    @if(count($replies)>0)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>Comment</th>
                <th>Commented_at</th>
                <th>Approve/Unapprove</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td><a href="{{route('home.post',$comment->post_id)}}">{{$comment->post->title}}</a></td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td>
                        @if($comment->is_active)
                            {!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}

                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Unapprove',['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('approve',['class'=>'btn btn-info']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                    <td>
                        {!! Form::model($comment,['method'=>'DELETE','action'=>['PostCommentController@update',$comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <h1 class="text-center">No comments</h1>
    @endif



@stop
