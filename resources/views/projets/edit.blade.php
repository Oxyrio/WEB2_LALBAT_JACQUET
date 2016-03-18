@extends('layouts.app')

@section('content')

    <div class=""row> //pour modifier un projet

        <h1>Modification du projet</h1> //sert à mondifier un projet


        {!! Form::open(['route' => ['projets.update', $projets->id], 'method' => 'PUT']) !!}


        <div class="form-group">
            {!! Form::text('titleprojet', $projets->titleprojet, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('textprojet', $projets->textprojet, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Mettre à jour')  !!}
        </div>
        <div class="form-group">
            {!! Form::close() !!}
        </div>

    </div>



@endsection
