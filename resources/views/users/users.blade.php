@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Editar usuario</h1>
        <form action="{{route('adminPower.update',$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Nombre
            <br/>
            <input type="text" name="name" value="{{$user->name}}" class="form form-control">
            Correo electrónico
            <br/>
            <input type="text" name="email" value="{{$user->email}}" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>

        <br/>
    </div>

@endsection

