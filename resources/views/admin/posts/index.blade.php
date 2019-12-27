@extends('layouts.admin')


@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Comments</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'NO Photo'}}" ></td>
                    <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->title}}</a></td>
                    <td><a href="{{route('home.post',$post->id)}}">{{str_limit($post->body,20)}}</a></td>
                    <td><a href="{{route('admin.comments.show',$post->id)}}">View Comments</a></td>
                    <td>{{$post->created_id}}</td>
                    <td>{{$post->updated_id}}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$posts->render()}}
        </div>
    </div>
@stop