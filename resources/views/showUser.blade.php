@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <!-- -------------------------------------------->

                        <h3>Dados do Usuário</h3>
                        <table>
                            <tr>
                                <td>Nome:</td>
                                <td> {{ $user->name }} </td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td> {{ $user->email }} </td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td> {{ $user->status }} </td>
                            </tr>
                            <tr>
                                <td>Data criacao:</td>
                                <td> {{ date('d/m/y H:i', strtotime($user->created_at)) }} </td>
                            </tr>
                        </table>

                        <p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('user.edit', ['user' => $user->id]) }}">Editar usuario</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Listar usuarios</a>
                                    </li>
                                </ol>
                            </nav>
                        </p>

                        <!-- -------------------------------------------->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
