@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nouveau Projet</div>

                    <div class="panel-body">

                        {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
                           {{csrf_field()}}
                           <div class="form-group">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                           </div>
                           <div class="form-group">
                           {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                           </div>
                           <div class="form-group">
                            {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                           </div>
                           {!! Form::submit('Envoyer', ['class' => 'btn col-md-12 btn-success']) !!}
                       {!! Form::close() !!}
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
@endsection