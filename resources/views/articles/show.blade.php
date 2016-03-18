@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Article {{$article->id}}</div>

                    <div class="panel-body">
                        <h3>Auteur : {{$article->user->name}}</h3>
                        <p>{{$article->description}}</p>
                        <a href="{{route('articles.edit', $article->id)}}">
                            <button class="btn btn-primary">
                                Modifier l'article
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        @if (!Auth::guest())
            @if(Auth::user()->role == "admin" || Auth::user()->name == $article->user->name)
                <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                    {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input value="supprimer" type="submit" class="form-control">
            @endif
        @endif
        </form>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Commentaires


                            {!! Form::open(['url' => action('CommentsController@store')])  !!}

                            {{ csrf_field() }}

                            {!! Form::text('com') !!}
                        </div>

                        <div class="panel-body">
                            <input type="hidden" name="article_id" value="{{$article->id}}">

                            {!! Form::close() !!}

                            @foreach($comments as $comment)

                                    <p>{{$comment->user->name}} : {{$comment->com}}</p>
                            @if (!Auth::guest())
                                @if (Auth::user()->role == "admin" || Auth::user()->name == $article->user->name)
                                    <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <input value="supprimer" type="submit" class="btn btn-danger">

                                    </form>
                                @endif
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection