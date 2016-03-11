@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->demande}}</p>
                            <a href="{{route('articles.show', $post->id)}}" class="btn btn-primary">Voir l'article</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection