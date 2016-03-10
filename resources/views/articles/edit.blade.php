@extends('layouts.app')

@section('content')
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
                            <ul>
                                @foreach($errors->all() as $error)
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