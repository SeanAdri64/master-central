@extends('layouts.app')

@section('content')

<h2>Editar Reserva</h2>

<form method="POST" action="/reservas/{{ $reserva->id }}">
    @csrf
    @method('PUT')

    <!-- Usuario -->
    <div class="mb-3">
        <label>Usuario</label>

        <select name="usuario_id" class="form-control">

            @foreach($usuarios as $usuario)

                <option value="{{ $usuario->id }}"
                    {{ $usuario->id == $reserva->usuario_id ? 'selected' : '' }}>

                    {{ $usuario->nombre }}
                    -
                    {{ $usuario->tipo_usuario }}
                    -
                    {{ $usuario->dependencia }}

                </option>

            @endforeach

        </select>
    </div>

    <!-- Laboratorio -->
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

    <!-- Fecha solicitud -->
    <div class="mb-3">
        <label>Fecha solicitud</label>

        <input
            type="date"
            name="fecha_solicitud"
            class="form-control"
            value="{{ $reserva->fecha_solicitud }}"
        >
    </div>

    <!-- Fecha inicio -->
    <div class="mb-3">
        <label>Fecha inicio</label>

        <input
            type="datetime-local"
            name="fecha_inicio"
            class="form-control"
            value="{{ \Carbon\Carbon::parse($reserva->fecha_inicio)->format('Y-m-d\TH:i') }}"
        >
    </div>

    <!-- Fecha fin -->
    <div class="mb-3">
        <label>Fecha fin</label>

        <input
            type="datetime-local"
            name="fecha_fin"
            class="form-control"
            value="{{ \Carbon\Carbon::parse($reserva->fecha_fin)->format('Y-m-d\TH:i') }}"
        >
    </div>

    <!-- Observación -->
    <div class="mb-3">
        <label>Observación</label>

        <textarea
            name="observacion"
            class="form-control"
        >{{ $reserva->observacion }}</textarea>
    </div>

    <!-- Botones -->
    <button class="btn btn-success">
        Actualizar
    </button>

    <a href="/reservas" class="btn btn-secondary">
        Volver
    </a>

</form>

@endsection