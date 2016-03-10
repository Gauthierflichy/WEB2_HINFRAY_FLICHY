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
                            <a href="{{route('articles.edit', $post->id)}}" class="col-md-3 col-md-offset-2 btn btn-primary">Editer</a>
                            <form action="{{route('articles.destroy', $post->id)}}" class="col-md-3">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Supprimer" class=" col-md-12 btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection