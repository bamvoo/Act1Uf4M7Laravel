@extends('layouts.app')
@section('content')


    <table class="table" style="width: 50vw; margin-left: 25vw">
        <thead>
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <tr>
                <td><h5>{{$property->descripcion}}</h5></td>
                <td><h5>{{$property->precio}} €</h5></td>
                <td></td>
            </tr>


        </div>
        </tbody>
    </table>

    <table class="table" style="width: 50vw; margin-left: 25vw">
        <thead>
        <tr>
            <th scope="col">Imágenes</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <tr>
                <td>
                    @if($property->fotografia!=null)<img src="{{asset('storage/'.$property->photo)}}" width="150px">@endif
                </td>
            </tr>


        </div>
        </tbody>
    </table>


    <br/>
    <br/>
    <a class="btn btn-info" style="margin-left: 25vw" href="{{route('properties.index')}}">Atrás</a>

@endsection


