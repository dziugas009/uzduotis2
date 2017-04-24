@extends('main')
@section('title', 'Show')

@section('content')
<div class="col-md-offset-1 col-md-4">
<h3> Vardas: {{ $post->name }}<br> Email: {{ $post->email }} </h3>
<h4> Pasirinktos pareigos: {{$post->job}}</h4>
    <h5>CV atsiuntė {{$post->created_at}}</h5>
    <a href="{{ asset('/files/'. $post->file) }}"> CV FAILAS </a>

</div>
@endsection