@extends('layouts.app')

@section('content')
    <h1>Formulaire</h1> //sert à créer un article

    {!! Form::open(['url'=>route('articles.store'), 'method' => 'POST']) !!}
    {{csrf_field()}}

    {!! Form::text('title') !!}
    <br><br>
    {!! Form::textarea('textarticle') !!}
    <br><br>
    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}

    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
