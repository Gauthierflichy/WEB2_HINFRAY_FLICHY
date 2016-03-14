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
    <h2>Commentaires</h2>
    {!! Form::open(['url' => action('CommentsController@store')])  !!}

    {{ csrf_field() }}

    {!! Form::text('com') !!}

    <input type="hidden" name="article_id" value="{{$article->id}}">

    {!! Form::close() !!}

    @foreach($comments as $comment)

            <p>{{$comment->user->name}} : {{$comment->com}}</p>
        

    @endforeach




@endsection