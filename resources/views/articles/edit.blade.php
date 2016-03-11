
@extends('layouts.app')

@section('content')
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

@endsection