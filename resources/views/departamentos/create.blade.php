@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Agregar departamento') }}</h1>
 
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('departamentos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="direccion">{{ __('Direccion') }}</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="renta">{{ __('Renta') }}</label>
                        <input type="renta" name="renta" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="propietario_id">{{ __('propietario') }}</label>
                        <select name="propietario_id" class="form-control" required>
                            @foreach($propietarios as $propietario)
                                <option value="{{ $propietario->id }}">{{ $propietario->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection