@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Mis Propiedades</h1>
        <table class="table">

{{--            añadir que solo se pongas sus propiedades--}}
            @foreach($properties as $property)
                    <div>
                        <a href="{{ route('properties.show', $property->id)}}">
{{--                            <a>{{$property->fotografia}}</a>--}}
                            <img src="{{asset('storage/'.$property->fotografia)}}" width="150px">
                            <h5>{{$property->direccion}}</h5>
                            <h5>{{$property->precio}}</h5>
                            <h5>{{$property->tipo}}</h5>
                            <h5>{{$property->estado}}</h5>
                            <h5>{{$property->m2}} metros cuadrados</h5>
                            <a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Editar</a>
{{--                            <a class="btn btn-primary" href="{{route('properties.destroy',$property->id)}}">Destruir</a>--}}
                            <form action="{{ route('properties.destroy', $property->id) }}" method='POST' >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Eliminar</button>

                            </form>
                        </a>
                    </div>

            @endforeach
            <a href="{{ route('properties.create') }}">TEXTO AQUI</a>
        </table>
    </div>

@endsection

{{--                <tr>--}}
{{--                    <td>{{$property->descripcion}}</td>--}}
{{--                    <td>{{$property->precio}} €</td>--}}
{{--                    <td>{{$property->tipo}}</td>--}}
{{--                    <td>{{$property->fotografia}}</td>--}}
{{--                    <td><a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Edit</a></td>--}}
{{--                </tr>--}}
