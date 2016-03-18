@extends('layouts.app')
@extends('layouts.user_menu')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                   <a href="{{route('projets.create')}}" class="col-md-10 col-md-offset-1 btn btn-warning"><i class="fa fa-plus-circle"></i>  Nouveau Projet</a>
                   <a href="{{route('articles.create')}}" style="margin-top: 20px" class="col-md-10 col-md-offset-1 btn btn-success"><i class="fa fa-plus-circle"></i>  Nouvel Article</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
