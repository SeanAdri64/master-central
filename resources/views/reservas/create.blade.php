@extends('layouts.app')

@section('content')

<h2>Crear Reserva</h2>

<form method="POST" action="/reservas">
    @csrf

    <div class="mb-3">
        <label>Usuario</label>
        <select name="usuario_id" class="form-control">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}
                    {{ $usuario->tipo_usuario }} - 
                    {{ $usuario->dependencia }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Laboratorio</label>
        <select name="laboratorio_id" class="form-control">
            @foreach($laboratorios as $lab)
                <option value="{{ $lab->id }}">{{ $lab->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Fecha solicitud</label>
        <input type="date" name="fecha_solicitud" class="form-control">
    </div>

    <div class="mb-3">
        <label>Fecha inicio</label>
        <input type="datetime-local" name="fecha_inicio" class="form-control">
    </div>

    <div class="mb-3">
        <label>Fecha fin</label>
        <input type="datetime-local" name="fecha_fin" class="form-control">
    </div>

    <div class="mb-3">
        <label>Observación</label>
        <textarea name="observacion" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="/reservas" class="btn btn-secondary">Volver</a>

</form>

@endsection