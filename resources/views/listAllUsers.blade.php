@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <!-- -------------------------------------------->

                        <h3>Lista de usuarios ativos</h3>

                        <table border="1">
                            <tr>
                                <td>ID</td>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td>Status</td>
                                <td colspan="2">Ações</td>
                            </tr>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td><a href="{{ route('user.show', ['user' => $user->id]) }}">Exibir</a></td>
                                    <td>
                                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="user" value="Remover">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
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
