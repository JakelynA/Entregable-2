@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Detalles del Alquiler') }}</h1>
 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('monto') }}</h5>
                <p class="card-text">{{ $alquiler->monto }}</p>
 
                <h5 class="card-title">{{ __('Fecha_inicio') }}</h5>
                <p class="card-text">{{ $alquiler->fecha_inicio }}</p>

                <h5 class="card-title">{{ __('Fecha_fin') }}</h5>
                <p class="card-text">{{ $alquiler->fecha_fin }}</p>
 
                <a href="{{ route('alquileres.edit', $alquiler->id) }}" class="btn btn-warning">{{ __('Editar') }}</a>
                <form action="{{ route('alquileres.destroy', $alquiler->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('Eliminar') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection