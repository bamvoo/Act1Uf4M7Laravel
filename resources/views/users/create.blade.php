@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <h1 class="my-4">Crear un usuario</h1>
        <form action="{{route('adminPower.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Nombre
            <br/>
            <input type="text" name="name" value="" class="form form-control" required>
            Correo
            <br/>
            <input type="text" name="email" value="" class="form form-control" required>
            Contraseña
            <br/>
            <input type="text" name="password" value="" class="form form-control" required>
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        </br>
    </div>

@endsection