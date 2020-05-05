@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Mis Propiedades</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Dirección</th>
                <th scope="col">Precio</th>
                <th scope="col">Tipo de hogar</th>
                <th scope="col">Tipo contrato</th>
                <th scope="col">Metros cuadrados</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($properties as $property)
                @if($property->user_id == $user)
                <div>
                    <tr>
                        <td><img src="{{asset('storage/'.$property->fotografia)}}" width="150px"></td>
                        <td><h5>{{$property->direccion}}</h5></td>
                        <td><h5>{{$property->precio}}</h5></td>
                        <td><h5>{{$property->tipo}}</h5></td>
                        <td><h5>{{$property->estado}}</h5></td>
                        <td><h5>{{$property->m2}}</h5></td>
                        <td>
                            <a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Editar</a>
                            {{--                            <a class="btn btn-primary" href="{{route('properties.destroy',$property->id)}}">Destruir</a>--}}
                            <form action="{{ route('properties.destroy', $property->id) }}" method='POST' >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>
                            <a class="btn btn-primary" href="{{ route('properties.show', $property->id)}}">Ver</a>
                        </td>
                    </tr>
                </div>
                @endif
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('properties.create') }}"><div class="btn btn-secondary btn-block ">Crear propiedad</div></a>
    </div>

@endsection

