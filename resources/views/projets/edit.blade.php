@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier l'article {{$post->id}}</div>

                    <div class="panel-body">
                        {!! Form::model($post, ['route' => ['projets.update', $post->id], 'method' => 'PUT']) !!}

                        <p>titre : {!! Form::text('title', old('title')) !!}</p>
                        {!! Form::select('user_id', $users , old('user_id')) !!}
                        <p>Nom du commanditaire : {!! Form::text('client', old('client')) !!}</p>
                        <p>Metier : {!! Form::text('client_metier', old('client_metier')) !!}</p>
                        <p>Adresse : {!! Form::text('client_adresse', old('client_adresse')) !!}</p>
                        <p>Mail : {!! Form::text('client_email', old('client_email')) !!}</p>
                        <p>Téléphone : {!! Form::text('client_tel', old('client_tel')) !!}</p>
                        <p>Nom du contact pour le suivi : {!! Form::text('client_suivi', old('client_suivi')) !!}</p>
                        <p>Metier du commanditaire : {!! Form::text('client_metier_suivi', old('client_metier_suivi')) !!}</p>
                        <p>Adresse : {!! Form::text('client_adresse_suivi', old('client_adresse_suivi')) !!}</p>
                        <p>Mail : {!! Form::text('client_email_suivi', old('client_email_suivi')) !!}</p>
                        <p>Téléphone : {!! Form::text('client_tel_suivi', old('client_tel_suivi')) !!}</p>
                        <p>Votre Fiche d'identité{!! Form::textarea('fiche_identite', old('fiche_identite')) !!}</p>
                        {{Form::select('type_projet', array('Site Internet' => 'Site Internet','3D' => '3D', 'Animation 2D' => 'Animation 2D', 'Installation Multimédia' => 'Installation Multimédia', 'Jeu Video' => 'Jeu video', 'DVD' => 'DVD', 'Print' => 'PRINT', 'CD-ROM' => 'CD-Rom', 'Evenements' => 'Evénements', 'Autre'=>'Autre'), old('type_projet'))}}
                        <p>Contexte de la demande{!! Form::textarea('context', old('context')) !!}</p>
                        <p>Votre demande{!! Form::textarea('demande', old('demande')) !!}</p>
                        <p>Vos objectifs{!! Form::textarea('objectifs', old('objectifs')) !!}</p>
                        <p>Contraintes particulières éventuelles et informations complémentaires{!! Form::textarea('contraintes',old('contraintes')) !!}</p>


                            {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
                        {!!Form::close()!!}

                        @if($errors)
                            <ul>
                                @foreach($errors->all() as $error)
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