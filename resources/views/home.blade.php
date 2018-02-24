@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active">
                            <a href="#">Home</a>
                        </li>
                        <li role="presentation" >
                            <a href="#">Grupos</a>
                        </li>
                        <li role="presentation" >
                            <a href="#">Grupos</a>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
