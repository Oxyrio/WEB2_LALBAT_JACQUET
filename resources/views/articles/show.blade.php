@extends('layouts.app')

@section('content')
    <h1>Article n° </h1>
    //montre un article en particulier

    <h2>{{$articles->title}}</h2>
    <h3>Auteur: {{ $articles->user->name }}</h3>
    <h3>{{$articles->textarticle}}</h3>

    //Affiche les commentaires de l'article


    <h3>Auteur: {{ $comments->user->name }}</h3>
    <h3>{{$commentaires->commentaire}}</h3> //commentaire est le texte du commentaire

    //Laisser un commentaire sur un article

    {!! Form::open(['url'=>route('commentaires.store'), 'method' => 'POST']) !!}
    {{csrf_field()}}

    {!! Form::select('user_id', $users) !!}
    <br><br>
    {!! Form::textarea('commentaire') !!}
    <br><br>
    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}

    <a href="{{route('articles.edit', $articles->id)}}">Modifier</a>
    <a href="\laravel\public\articles">Revenir aux articles</a>



@endsection
