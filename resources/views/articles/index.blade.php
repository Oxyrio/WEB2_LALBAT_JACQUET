@extends('layouts.app')

@section('content')
    <h1>Liste de mes articles</h1> //Montre tous les articles

    @foreach($articles as $article)
        <h2>{{$article->title}}</h2>
        <p>{{$article->textarticle}}</p>

        <a href="{{route('articles.show', $post->id)}}">
            <button>
                Voir l'article
            </button>
        </a>
        @if(Auth::check() && Auth::user()->id == $article->user_id)
            <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer</button>
            </form>
            <input type="hidden" name="_method" value="DELETE">
        @endif

    @endforeach
@endsection
