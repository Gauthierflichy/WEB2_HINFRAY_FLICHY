
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nouveau Projet</div>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'articles.store', 'method' => 'POST'))  !!}

                        {{ csrf_field() }}

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection