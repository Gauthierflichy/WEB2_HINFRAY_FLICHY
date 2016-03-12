@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier un article</div>

                    <div class="panel-body">

                        {!! Form::open(['url' => route('projets.store'), 'method' => 'POST']) !!}
                           {{csrf_field()}}
                           <p>titre : {!! Form::text('title') !!}</p>
                        {!! Form::select('user_id', $users) !!}
                           <p>Nom du commanditaire : {!! Form::text('client') !!}</p>
                        <p>Metier : {!! Form::text('client_metier') !!}</p>
                        <p>Adresse : {!! Form::text('client_adresse') !!}</p>
                        <p>Mail : {!! Form::text('client_email') !!}</p>
                        <p>Téléphone : {!! Form::text('client_tel') !!}</p>
                        <p>Nom du contact pour le suivi : {!! Form::text('client_suivi') !!}</p>
                        <p>Metier du commanditaire : {!! Form::text('client_metier_suivi') !!}</p>
                        <p>Adresse : {!! Form::text('client_adresse_suivi') !!}</p>
                        <p>Mail : {!! Form::text('client_email_suivi') !!}</p>
                        <p>Téléphone : {!! Form::text('client_tel_suivi') !!}</p>
                        <p>Votre Fiche d'identité{!! Form::textarea('fiche_identite') !!}</p>
                        {{Form::select('type_projet', array('Site Internet' => 'Site Internet','3D' => '3D', 'Animation 2D' => 'Animation 2D', 'Installation Multimédia' => 'Installation Multimédia', 'Jeu Video' => 'Jeu video', 'DVD' => 'DVD', 'Print' => 'PRINT', 'CD-ROM' => 'CD-Rom', 'Evenements' => 'Evénements', 'Autre'=>'Autre'))}}
                        <p>Contexte de la demande{!! Form::textarea('context') !!}</p>
                        <p>Votre demande{!! Form::textarea('demande') !!}</p>
                        <p>Vos objectifs{!! Form::textarea('objectifs') !!}</p>
                        <p>Contraintes particulières éventuelles et informations complémentaires{!! Form::textarea('contraintes') !!}</p>

                        {!! Form::submit('Envoyer') !!}
                       {!! Form::close() !!}
                        {{--@if($errors)
                            <ul>
                            @foreach($errors->all as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection