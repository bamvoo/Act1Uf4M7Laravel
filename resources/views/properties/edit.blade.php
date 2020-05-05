@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('properties.update',$property->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Descripción
            <br/>
            <input type="text" name="descripcion" value="{{$property->descripcion}}" class="form form-control">
            Precio
            <br/>
            <input type="text" name="precio" value="{{$property->precio}}" class="form form-control">
            Imagen
            <br/>
            <input type="file" name="photo" value="{{$property->fotografia}}" class="form form-control">
            Owner
            <br/>
            <input class="list-group " list="owner_id" name="owner_id" value="{{$property->owner_id}}">
            @foreach($users as $user)
                <datalist id="owner_id">
                    <option value="{{$user->id}}">{{$user->email}}</option>
                </datalist>
            @endforeach
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection