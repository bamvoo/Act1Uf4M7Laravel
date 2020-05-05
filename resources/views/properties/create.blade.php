@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <h1 class="my-4">Añadir una propiedad</h1>
        <form action="{{route('properties.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Dirección
            <br/>
            <input type="text" name="direccion" value="" class="form form-control" required>
            Description
            <br/>
            <input type="text" name="descripcion" value="" class="form form-control" required>
            Price
            <br/>
            <input type="text" name="precio" value="" class="form form-control" required>
            Tipo de propiedad
            <br/>
            <select name="tipo" class="form form-control">
                <option value="casa">Casa</option>
                <option value="piso">Piso</option>
                <option value="bungalow">Bungalow</option>
            </select>
            Estado, comprado o Alquiler?
            <br/>
            <select name="estado" class="form form-control">
                <option value="alquiler">Alquiler</option>
                <option value="compra">Compra</option>
            </select>
            Visibilidad
            <br/>
            <input type="checkbox" name="visibilidad" >Visible?<br>
{{--            <input type="text" name="visible" value="" class="form form-control" required>--}}
            Metros cuadrados
            <br/>
            <input type="text" name="m2" value="" class="form form-control" required>
            Imagen propiedad
            <br/>
            <input type="file" name="fotografia">
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        </br>
    </div>

@endsection