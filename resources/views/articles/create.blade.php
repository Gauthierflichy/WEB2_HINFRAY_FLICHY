@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nouveau Projet</div>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'articles.store', 'method' => 'POST'))  !!}

                        {{ csrf_field() }}

                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titre']) !!}
                        <br><br>

                        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                        <br><br>

                        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}

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