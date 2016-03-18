@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification du profil</div>

                    <div class="panel-body">
                        {!! Form::open(array('route' => 'post.store', $user->id)) !!}
                        {!! Form::model($user, ['route' => ['profil.update'], 'method' => 'PUT']) !!} // formulaire de modification du profil de l'utilisateur

                            {!! Form::text('name', old('name')) !!}

                            {!! Form::text('email', old('email'), ['placeholder' => 'Entrez votre email']) !!}

                        <a class="btn btn-danger"  href="{{ route('profil.edit_password') }}">Changer votre mot de passe</a>
                        {!! Form::submit('Modifier', ['class' => 'btn btn-alert']) !!}
                        {!!Form::close()!!}

                        @if($errors)
                            <ul class="col-md-12">
                                @foreach($errors->all() as $error)
                                    <div class="col-md-12">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <li >{{$error}}</li>
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