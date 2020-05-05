@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <div>Accedido como administrador | Logged like admin</div>
                    @else
                        <div>Accedido como usuario | Logged like user</div>
                    @endif
                </div>
            </div>
            <table class="table">
                @foreach($propiedades as $property)
                    <a href="{{ route('properties.show', $property->id)}}">
                        <propiedad>
                            <a>{{$property->fotografia}}</a>
                            <h5>{{$property->direccion}}</h5>
                            <h5>{{$property->precio}}</h5>
                            <h5>{{$property->tipo}}</h5>
                            <h5>{{$property->estado}}</h5>
                            <h5>{{$property->m2}} metros cuadrados</h5>
                            <a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Edit</a>
                        </propiedad>
                    </a>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
