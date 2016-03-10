@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier un article</div>

                    <div class="panel-body">

                        {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
                           {{csrf_field()}}
                           {!! Form::text('title') !!}
                           <br>
                           {!! Form::textarea('description') !!}
                           <br>
                            {!! Form::select('user_id', $users) !!}
                           <br>
                           {!! Form::submit('Envoyer') !!}
                       {!! Form::close() !!}
                        @if($errors)
                            <ul>
                            @foreach($errors->all as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection