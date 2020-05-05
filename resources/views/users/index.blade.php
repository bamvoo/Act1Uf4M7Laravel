@extends('layouts.app')

@section('content')


    <div class="col-lg-12">

        <h1 class="my-4">Lista Usuarios Registrados</h1>
        <table class="table">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Edición</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <div>
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td><h5>{{$user->name}}</h5></td>
                                <td><h5>{{$user->email}}</h5></td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('adminPower.edit',$user->id)}}">Editar</a>
                                    <form action="{{ route('adminPower.destroy', $user->id) }}" method='POST' >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>


                        </div>

                    @endforeach
                </tbody>
            </table>
        </div>
            <a href="{{ route('adminPower.create') }}"><div class="btn btn-secondary btn-block ">Crear usuario</div></a>
        </table>
    </div>


@endsection