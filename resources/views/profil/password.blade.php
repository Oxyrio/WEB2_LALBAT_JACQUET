@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification du profil</div>

                    <div class="panel-body">
                        {!! Form::open(array('route' => 'profil.update_password', 'method' => 'PUT')) !!} // formulaire de modification du mot de passe

                            {!! Form::label('password', 'Nouveau mot de passe') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}

                            {!! Form::label('password_confirmation', 'Confirmez le mot passe') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                            {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}

                        {!!Form::close()!!}

                        @if($errors)
                            <ul class="col-md-12">
                                @foreach($errors->all() as $error)
                                    <div class="col-md-12">
                                        <a href="#" data-dismiss="alert" aria-label="close">&times;</a>
                                        <li>{{$error}}</li>
                                    </div>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection