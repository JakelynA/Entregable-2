@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Departamento') }}</h1>
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
        <form method="POST" action="{{ route('departamentos.update', $departamento->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="direccion">{{ __('direccion') }}</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $departamento->direccion) }}" required>
            </div>
            <div class="form-group">
                <label for="email">{{ __('Renta') }}</label>
                <input type="email" class="form-control" id="renta" name="renta" value="{{ old('renta', $departamento->renta) }}" required>
            </div>
            <div class="form-group">
                <label for="propietario">{{ __('Propietario') }}</label>
                <select class="form-control" id="propietario" name="propietario_id" required>
                    @foreach($propietarios as $propietario)
                        <option value="{{ $propietario->id }}" {{ $departamento->propietario_id == $propietario->id ? 'selected' : '' }}>{{ $propietario->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Guardar Cambios') }}</button>
        </form>
    </div>
@endsection
 