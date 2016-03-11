@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Article {{$post->id}}</div>

                    <div class="panel-body">
                       <h2>{{$post->title}}</h2>*
                        <h4>{{$post->user->name}}</h4>
                        <p>{{$post->description}}</p>
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