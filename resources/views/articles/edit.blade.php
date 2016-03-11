
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier l'article {{$article->id}}</div>
                    <div class="panel-body">
                        {{ Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT')) }}
                        {{ csrf_field() }}

                        {!! Form::select('user_id', $users , old('user_id')) !!}
                        <br><br>

                        {!! Form::text('title', old('title')) !!}
                        <br><br>

                        {!! Form::textarea('description', old('description')) !!}
                        <br><br>

                        {!! Form::submit('Modifier') !!}

                        {!! Form::Close() !!}
                        @if($errors)
                            <ul>
                                @foreach($errors->all() as $errors)
                                    <li>
                                        {{$errors}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection