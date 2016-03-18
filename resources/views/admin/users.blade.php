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
        <div class="col-md-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Membres
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline col-xs-12">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <th>{{$user->name}}</th>
                                        <th>{{$user->email}}</th>
                                        <th>{{$user->role}}</th>
                                        <th>
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <form action="{{route('profile.destroy', $user->id)}}" class="col-md-12" method="DESLETE">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input value="Supprimer X" type="submit" class="btn btn-danger btn-circle col-md-12">
                                                    </form>
                                                </div>
                                                <div class="col-md-12 col-xs-12">
                                                    @if ($user->role !== "admin")
                                                        <form action="{{url('/profile/promote', $user->id)}}" class="col-md-12" method="POST">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <input value="Promouvoir" type="submit" class="btn btn-warning btn-circle col-md-12">
                                                        </form>
                                                    @elseif ($user->role == "admin" && $user->name !== "Admin" )
                                                        <form action="{{route('profile.promote', $user->id)}}" class="col-md-12" method="POST">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <input value="Retrograder" type="submit" class="btn btn-success btn-circle col-md-12">
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
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