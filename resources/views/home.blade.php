@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                        <!-- -------------------------------------------->

                        <ul>
                            <li><a class="nav-link" href="{{ route('user.create') }}">Novo usuário</a></li>
                            <li><a class="nav-link" href="{{ route('user.index') }}">Listar usuários ativos</a></li>
                            <!--<li><a class="nav-link" href="{{ route('api.index') }}">Listar json</a></li>-->
                        </ul>

                        <!-- -------------------------------------------->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
