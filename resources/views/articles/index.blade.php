
@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>

    @foreach($articles as $article)
        <h2>{{$article->title}}</h2>
        <p>{{$article->description}}</p>
        <a href="{{route('articles.show', $article->id)}}">
            <button>
                Voir l'article
            </button>
        </a>
        <form action="{{route('articles.destroy', $article->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input value="supprimer" type="submit" class="form-control">

        </form>
    @endforeach

@endsection