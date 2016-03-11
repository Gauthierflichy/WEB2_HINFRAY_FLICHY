@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Article {{$post->id}}</div>

                    <div class="panel-body">
                        <h1>Demande d'inscription à la bourse aux projets de l'IIM</h1>
                       <h2>{{$post->title}}</h2>
                        <h4>Nom, prénom et fonction du commanditaire : {{$post->client}} {{$post->client_metier}}</h4>
                        <p>Adresse postale : {{$post->client_adresse}}</p>
                        <p>Mail : {{$post->client_email}}</p>
                        <p>Téléphone : {{$post->client_tel}}</p>
                        <h4>Nom, prénom et fonction du commanditaire : {{$post->client_suivi}} {{$post->client_suivi_metier}}</h4>
                        <p>Adresse postale : {{$post->client_suivi_adresse}}</p>
                        <p>Mail : {{$post->client_suivi_email}}</p>
                        <p>Téléphone : {{$post->client_suivi_tel}}</p>
                        <h2>Ficher d'identité</h2>
                        <p>{{$post->fiche_identite}}</p>
                        <h2>Descriptif du projet</h2>
                        <p>{{$post->type_projet}}</p>
                        <h2>Contexte de la demande</h2>
                        <p>{{$post->context}}</p>
                        <h2>Votre demande</h2>
                        <p>{{$post->demande}}</p>
                        <h2>Vos objectifs</h2>
                        <p>{{$post->objectifs}}</p>
                        <h2>Contraites particulières</h2>
                        <p>{{$post->contraintes}}</p>
                        <div class="row">
                            <a href="{{route('articles.edit', $post->id)}}" class="col-md-3 col-md-offset-3 btn btn-primary">Editer</a>
                            {!! Form::model($post, ['route' => ['articles.destroy', $post->id], 'method' => 'DELETE', 'class' => 'col-md-3']) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection