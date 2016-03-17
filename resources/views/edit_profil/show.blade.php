@extends('layouts.app')

@section('content')
    <div class="container"> // page pour montrer le profil de l'utilisateur
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Votre profil</div>

                    <div class="panel-body">
                        <h4><strong>Nom :</strong> {{$user->name}}</h4>
                        <h4><strong>E-mail :</strong> {{$user->email}}</h4>
                        <a class="btn btn-success" href="{{route('profil.edit')}}">Modifier le profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection