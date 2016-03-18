@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Listes des articles</div>

                    <div class="panel-body">
                        @foreach($articles as $article)
                            <h2>{{$article->title}}</h2>
                            <p>{{$article->description}}</p>
                            <a href="{{route('articles.show', $article->id)}}">
                                <button class="btn btn-primary">
                                    Voir l'article
                                </button>
                            </a>
                            @if (!Auth::guest())
                                @if(Auth::user()->role == "admin" || Auth::user()->name == $article->user->name)
                                    <form action="{{route('articles.destroy', $article->id)}}" method="POST">
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

@endsection