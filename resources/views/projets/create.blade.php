@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nouveau Projet</div>

                    <div class="panel-body">

                        {!! Form::open(['url' => route('projets.store'), 'method' => 'POST']) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client', null, ['class' => 'form-control', 'placeholder' => 'Nom du Commanditaire']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('metier', null, ['class' => 'form-control', 'placeholder' => 'metier']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('adresse', null, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('mail', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'telephone']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_suivi', null, ['class' => 'form-control', 'placeholder' => 'Nom du Contact pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_metier_suivi', null, ['class' => 'form-control', 'placeholder' => 'Métier du client pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_adresse_suivi', null, ['class' => 'form-control', 'placeholder' => 'Adresse du client pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_mail_suivi', null, ['class' => 'form-control', 'placeholder' => 'Mail du client pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_tel_suivi', null, ['class' => 'form-control', 'placeholder' => 'Telephone du client pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('fiche_identite', null, ['class' => 'form-control', 'placeholder' => 'Votre fiche d\'identite']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('client_tel_suivi', null, ['class' => 'form-control', 'placeholder' => 'Telephone du client pour le suivi']) !!}
                        </div>
                        <div class="form-group">
                            {{Form::select('type_projet', array('Site Internet' => 'Site Internet','3D' => '3D', 'Animation 2D' => 'Animation 2D', 'Installation Multimédia' => 'Installation Multimédia', 'Jeu Video' => 'Jeu video', 'DVD' => 'DVD', 'Print' => 'PRINT', 'CD-ROM' => 'CD-Rom', 'Evenements' => 'Evénements', 'Autre'=>'Autre'), null, array('class' => 'form-control', 'placeholder' => 'Type de projet :'))}}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('context', null, ['class' => 'form-control', 'placeholder' => 'Context de la demande']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('demande', null, ['class' => 'form-control', 'placeholder' => 'Demande...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('objectifs', null, ['class' => 'form-control', 'placeholder' => 'Objectifs']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('contraintes', null, ['class' => 'form-control', 'placeholder' => 'Contraintes']) !!}
                        </div>

                        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
                       {!! Form::close() !!}
                        @if($errors)
                            <ul class="col-md-12">
                            @foreach($errors->all as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection