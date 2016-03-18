@extends('layouts.app')

@section('content')
    <h1>Liste des projets</h1> //Montre tous les projets

    @foreach($projets as $projet)
        <h2>{{$projet->titleprojet}}</h2>
        <p>{{$projet->textprojet}}</p>

        <a href="{{route('projets.show', $projet->id)}}">
            <button>
                Voir le projet
            </button>
        </a>
        @if(Auth::check() && Auth::user()->id == $projet->user_id)
            <form action="{{route('projets.destroy',$projet->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer le projet</button>
            </form>
            <input type="hidden" name="_method" value="DELETE">
        @endif

    @endforeach
@endsection
