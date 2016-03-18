@extends('layouts.app')

@section('content')
    <h1>Formulaire</h1> //sert à créer un article

    {!! Form::open(['url'=>route('articles.store'), 'method' => 'POST']) !!}
    {{csrf_field()}}

    <h3>Titre: {!! Form::text('titleprojet') !!}</h3>
    <br><br>
    <h2>Le Commanditaire :</h2>
    <br>
    <h3>Nom: {!! Form::text('commanditaire') !!}</h3>
    <br>
    <h3>Métier: {!! Form::text('command_metier') !!}</h3>
    <br>
    <h3>Téléphone: {!! Form::text('command_tel') !!}}</h3>
    <br>
    <h3>Email: {!! Form::text('command_mail') !!}</h3>
    <br>
    <h3>Ville: {!! Form::text('command_ville') !!}</h3>
    <br><br>
    <h2>Le Décisionnaire :</h2>
    <br>
    <h3>Nom: {!! Form::text('decisionnaire') !!}</h3>
    <br>
    <h3>Metier: {!! Form::text('decid_metier') !!}</h3>
    <br>
    <h3>Téléphone: {!! Form::text('decid_tel') !!}</h3>
    <br>
    <h3>Email: {!! Form::text('decid_mail') !!}</h3>
    <br>
    <h3>Ville: {!! Form::text('decid_ville') !!}</h3>
    <br><br>
    <h2>Le Projet :</h2>
    <br>
    <h3>Type du projet: {!! Form::text('type_projet') !!}</h3>
    <br>
    <h3>Contexte: {!! Form::text('contexte') !!}</h3>
    <br>
    <h3>Objectifs: {!! Form::text('objectifs') !!}</h3>
    <br>
    <h3>Description du projet: {!! Form::textarea('textprojet') !!}</h3>
    <br>
    <h3>Contraintes: {!! Form::text('contraintes') !!}</h3>

    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}

    @if($errors) //pour les erreurs
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
