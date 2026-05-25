@extends('layouts.app')

@section('content')

<h2>Editar Reserva</h2>

<form method="POST" action="/reservas/{{ $reserva->id }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Usuario</label>
        <select name="usuario_id" class="form-control">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" 
                    {{ $usuario->id == $reserva->usuario_id ? 'selected' : '' }}>
                    {{ $usuario->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Laboratorio</label>
        <select name="laboratorio_id" class="form-control">
            @foreach($laboratorios as $lab)
                <option value="{{ $lab->id }}" 
                    {{ $lab->id == $reserva->laboratorio_id ? 'selected' : '' }}>
                    {{ $lab->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Actualizar</button>
    <a href="/reservas" class="btn btn-secondary">Volver</a>

</form>

@endsection