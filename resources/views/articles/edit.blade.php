
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier l'article {{$post->id}}</div>

                    <div class="panel-body">
                        {!! Form::model($post, ['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                            </div>
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
                        {!!Form::close()!!}

                        @if($errors)
                            <ul class="col-md-12" style="padding-top: 10px;">
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger col-md-12">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <li style="list-style: none">{{$error}}</li>
                                    </div>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
=======
    <h1>Edit</h1>
    {{--{!! Form::model(array('route' => array('post.update', $post->id), 'method' => 'PUT')) !!}--}}

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

>>>>>>> 8787ccdfbd918c3d208bd246d8773a86a0d76780
@endsection