@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <ul class="nav nav-pills">
                        <li role="presentation" >
                            <a href="{{env('APP_URL')}}/home">Principal</a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="{{env('APP_URL')}}/planilha">Planilha de tarefa</a>
                        </li>
                        <li role="presentation" >
                            <a href="{{env('APP_URL')}}/configuracao">Configuração</a>
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

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Cras justo odio</a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
