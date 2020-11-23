@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <!-- -------------------------------------------->

                        <h3>Editar Usuario</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <table>
                                <tr>
                                    <td><label for="">Nome:</label></td>
                                    <td><input type="text" name="name" value="{{$user->name}}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="">E-mail:</label></td>
                                    <td><input type="email" name="email" value="{{$user->email}}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="">Status:</label></td>
                                    <td><input type="text" name="status" value="{{$user->status}}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="">Senha:</label></td>
                                    <td><input type="password" name="password" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Alterar" class="btn btn-primary"></td>
                                    <td><a class="nav-link" href="{{ route('user.index') }}">Cancelar</a>
                                    </td>
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
