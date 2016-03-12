@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <h2>Article n°{{$article->id}}</h2>
    <h3>Auteur : {{$article->user->name}}</h3>
    <p>{{$article->description}}</p>
    <a href="{{route('articles.edit', $article->id)}}">
        <button>
            Modifier l'article
        </button>
    </a>
    <form action="{{route('articles.destroy', $article->id)}}" method="POST">
        {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input value="supprimer" type="submit" class="form-control">

    </form>



@endsection