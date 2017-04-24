@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Siųskite CV</h1>
            <hr>
            <p>* - reikalingi laukai</p>

            {!! Form::open(['route' => 'posts.store', 'files' => 'true']) !!}

            {{ Form::label('name', 'Vardas*:') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jonas', 'required' => 'required'] ) }}

            {{ Form::label('email', "El.paštas:*") }}
            {{ Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'jonas@gmail.com', 'required' => 'required']) }}



            {{ Form::label('file', "Failas*") }}
            {{ Form::file('file', array('required' => 'required')) }}
            <br>
            {{ Form::label('job', "Pasirinkite pareigas*:") }}
            {{ Form::select('job', ['Php programuotojas' => 'Php programuotojas', 'Mechanikas' => 'Mechanikas', 'Turto vertintojas' => 'Turto vertintojas'], ['required'=>'required']) }}

            {{Form:: submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

            {!! Form::close() !!}

        </div>
    </div>
@endsection