@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier le profile</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'profile.update_pswd', 'method' => 'PUT')) !!}
                        {!! Form::label('password', 'Nouveau mot de passe') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        {!! Form::label('password_confirmation', 'Confirmez le mot passe') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
                    {!!Form::close()!!}

                    @if($errors)
                        <ul class="col-md-12" style="padding-top: 10px;">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger col-md-12">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <li style="list-style: none">{{$error}}</li>
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