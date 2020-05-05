@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row ">
                <div class="col img-thumbnail " id="wdiv1" style="background-image: url({{ asset('storage/img/fondo1_o2.jpg') }});">
                    <h1 class="title">NewHomePlus</h1>
                    <a>Estás triste cont tu hogar actual?<br> Tus vecinos son tal incordio que ni en la muerte los quiere?<br> Siempre estacionan el coche en tu aparcamiento?<br> Pues deja de llorar y cambia de viviendas!</a>
                </div>
            </div>
            <div class="subtitulo_d">
                <a class="subtitulo_t">Propiedades disponibles</a>
            </div>
            <div class="row" id="wdiv2">
                <div class="grid" >
                    @foreach($propiedades as $property)
                        <div class="grid_c">

                                <div style="height: 360px;">
                                    <img src="{{asset('storage/'.$property->fotografia)}}" width="150px" height="150px" style=" margin-bottom:20px;">
                                    <h5>{{$property->direccion}}</h5>
                                    <h5>{{$property->precio}} €</h5>
                                    <h5>{{$property->tipo}}</h5>
                                    <h5>{{$property->estado}}</h5>
                                    <h5>{{$property->m2}} m2</h5>
                                    @if(Auth::user())
                                        <a class="btn btn-primary" href="{{ route('properties.show', $property->id)}}">Ver</a>
                                        @if(Auth::user()->hasRole('admin'))
                                            <a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Edit</a>
                                        @endif
                                    @endif
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
