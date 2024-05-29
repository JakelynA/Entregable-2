@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Detalles del Departamento') }}</h1>
 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('direccion') }}</h5>
                <p class="card-text">{{ $departamento->direccion }}</p>
 
                <h5 class="card-title">{{ __('Renta') }}</h5>
                <p class="card-text">{{ $departamento->renta }}</p>
 
                <h5 class="card-title">{{ __('Propietario') }}</h5>
                <p class="card-text">{{ $departamento->propietario->nombre }}</p>
 
                <!-- Otros detalles del departamento -->
            </div>
        </div>
    </div>
@endsection