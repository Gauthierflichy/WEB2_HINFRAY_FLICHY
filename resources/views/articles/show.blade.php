
@extends('layouts.app')

@section('content')
    <h2>Article n°{{$post->id}}</h2>
    <h3>Auteur : {{$post->user->name}}</h3>
    <p>{{$post->description}}</p>
    <a href="{{route('articles.edit', $post->id)}}">
        <button>
            Modifier l'article
        </button>
    </a>
    <form action="{{route('articles.destroy', $post->id)}}" method="POST">
        {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input value="supprimer" type="submit" class="form-control">

    </form>



@endsection