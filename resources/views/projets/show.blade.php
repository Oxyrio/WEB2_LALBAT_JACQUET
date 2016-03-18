@extends('layouts.app')

@section('content')
    //montre un projet en particulier

    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

                <div class="panel-body">

                    <h2>{{$projets->titleprojet}}</h2>
                    <br><br>
                    <h2>Le Commanditaire :</h2>
                    <br>
                    <h3>Nom: {{ $projets->commanditaire }}</h3>
                    <br>
                    <h3>Métier: {{ $projets->command_metier }}</h3>
                    <br>
                    <h3>Téléphone: {{ $projets->command_tel }}</h3>
                    <br>
                    <h3>Email: {{ $projets->command_mail }}</h3>
                    <br>
                    <h3>Ville: {{ $projets->command_ville }}</h3>
                    <br><br>
                    <h2>Le Décisionnaire :</h2>
                    <br>
                    <h3>Nom: {{ $projets->decisionnaire }}</h3>
                    <br>
                    <h3>Metier: {{ $projets->decid_metier }}</h3>
                    <br>
                    <h3>Téléphone: {{ $projets->decid_tel }}</h3>
                    <br>
                    <h3>Email: {{ $projets->decid_mail }}</h3>
                    <br>
                    <h3>Ville: {{ $projets->decid_ville }}</h3>
                    <br><br>
                    <h2>Le Projet :</h2>
                    <br>
                    <h3>Type du projet: {{ $projets->type_projet }}</h3>
                    <br>
                    <h3>Contexte: {{ $projets->contexte }}</h3>
                    <br>
                    <h3>Objectifs: {{ $projets->objectifs }}</h3>
                    <br>
                    <h3>Description du projet: {{ $projets->textprojet }}</h3>
                    <br>
                    <h3>Contraintes: {{$projets->contraintes}}</h3>
                    <br><br>
                    <h3>Statut: {{ $projets->statut }}</h3>



                    <a href="{{route('articles.edit', $articles->id)}}">Modifier</a>
                    <a href="\laravel\public\articles">Revenir aux articles</a>

                </div>

            </div>

        </div>

    </div>





@endsection
