@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil</div>

                    <div class="panel-body">
                        <h4><strong>Nom :</strong> {{$user->name}}</h4>
                        <h4><strong>E-mail :</strong> {{$user->email}}</h4>
                        <a class="btn btn-success" href="{{route('profile.edit')}}">Editer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection