@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Agregar inquilino') }}</h1>
 
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">{{ __('Nombre') }}</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Correo Electrónico') }}</label>
                        <input type="email" name="email" id="correo_eletronico" class="form-control" required>
                    </div>
                    <form method="POST" action="/ruta-de-guardado">
                        @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection
