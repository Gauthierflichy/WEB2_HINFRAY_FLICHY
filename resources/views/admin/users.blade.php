@extends('layouts.app')

@section('admin')
    <ul class="nav navbar-nav">
        <li class=""><a href="{{route('admin.index')}}">Projets</a></li>
        <li class=""><a href="{{route('admin.articles')}}">Articles</a></li>
        <li class="active"><a href="{{route('admin.users')}}">Membres</a></li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Membres
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline">
                            <thead>
                                <tr role="row">
                                    <th>Nom</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)
                                    <tr  class="gradeA" role="row">
                                        <th>{{$user->name}}</th>
                                        <th>{{$user->email}}</th>
                                        <th>{{$user->role}}</th>
                                        <th>
                                            <form action="{{route('profile.destroy', $user->id)}}" method="POST">
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