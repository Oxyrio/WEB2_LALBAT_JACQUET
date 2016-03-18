@extends('layouts.app')

@section('content')
    <h1>Modification de l'article n°</h1> //sert à mondifier un article


    {!! Form::open(['route' => ['articles.update', $articles->id], 'method' => 'PUT']) !!}


    <div class="form-group">
        {!! Form::text('title', $articles->title, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('textarticle', $articles->textarticle, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Mettre à jour')  !!}
    </div>
    <div class="form-group">
        {!! Form::close() !!}
    </div>

@endsection
