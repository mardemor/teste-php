@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <!-- -------------------------------------------->

                        <h3>Cadastro de Usuario</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <table border="0">
                                <tr>
                                    <td><label for="">Nome</label></td>
                                    <td><input type="text" name="name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="">E-mail</label></td>
                                    <td><input type="email" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Senha</label></td>
                                    <td><input type="password" name="password" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Cadastrar" class="btn btn-primary"></td>
                                    <td><a class="nav-link" href="{{ route('home') }}">Cancelar</a></td>
                                </tr>
                            </table>
                        </form>

                        <!-- -------------------------------------------->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

