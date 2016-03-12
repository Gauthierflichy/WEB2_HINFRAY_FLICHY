@extends('layouts.app')

@section('admin')
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('admin.index')}}">Projets</a></li>
        <li class=""><a href="{{route('admin.articles')}}">Articles</a></li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Projets
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline">
                            <thead>
                                <tr role="row">
                                    <th>Titre</th>
                                    <th>Client</th>
                                    <th>E-mail</th>
                                    <th>Type Projet</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($projets as $projet)
                                    <tr  class="gradeA" role="row">
                                        <th>{{$projet->title}}</th>
                                        <th>{{$projet->client}}</th>
                                        <th>{{$projet->client_email}}</th>
                                        <th>{{$projet->type_projet}}</th>
                                        <th>{{$projet->status}}</th>
                                        <th><a href="{{route('projets.edit', $projet->id)}}"><button type="button" class="btn btn-default btn-circle btn-xs">Editer <i class="fa fa-pencil"></i></button></a>
                                            <form action="{{route('projets.destroy', $projet->id)}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input value="Supprimer X" type="submit" class="btn btn-danger btn-circle btn-xs">
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection