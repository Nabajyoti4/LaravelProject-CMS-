@extends('layouts.blog-home')

@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                @if($posts)
                    @foreach($posts as $post)
                        <h2>
                            <a href="#">{{$post->title}}</a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php">{{$post->user->name}}</a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
                        <hr>
                        <img height="300" width="400" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/900x300'}}" >
                        <hr>
                        <p>{!! $post->body !!}</p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                @endforeach
            @endif

            <!-- Pager -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                        {{$posts->render()}}
                    </div>
                </div>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            @include('includes.homesidebar')


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

@endsection
