
@extends('layouts.app')

@section('content')
    <h1>Formulaire</h1>
    {!! Form::open(array('route' => 'articles.store', 'method' => 'POST'))  !!}

        {{ csrf_field() }}

        {!! Form::select('user_id', $users) !!}
        <br><br>

        {!! Form::text('title') !!}
        <br><br>

        {!! Form::textarea('description') !!}
        <br><br>

        {!! Form::submit('Envoyer') !!}

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