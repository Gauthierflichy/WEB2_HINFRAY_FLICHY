@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Page des Articles</div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->description}}</p>
                            <a href="{{route('articles.show', $post->id)}}"><button>Voir l'article</button></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection