
@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>

    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}}</p>
        <a href="{{route('articles.show', $post->id)}}">
            <button>
                Voir l'article
            </button>
        </a>
        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input value="supprimer" type="submit" class="form-control">

        </form>
    @endforeach

@endsection