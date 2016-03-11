@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                   <a href="{{route('articles.create')}}" class="col-md-10 col-md-offset-1 btn btn-warning"><i class="fa fa-plus-circle"></i>  Nouveau Projet</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
