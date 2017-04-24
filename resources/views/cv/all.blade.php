@extends('main')
@section('content')

    <div class="container">
        <div class="row">
            <?php
            $posts = \App\Post::orderBy('created_at', 'DESC');
            $posts->each(function ($post) {?>
            <div class="col-md-2">
                <div class="panel panel-info">
                    <h4><a href="posts/{{$post->id}}">{{$post->job}}</a></h4>
                    <p>{{$post->created_at}}</p>
                </div>
            </div>
            <?php }); ?>
        </div>
    </div>
@endsection