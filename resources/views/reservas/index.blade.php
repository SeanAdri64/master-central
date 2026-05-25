@extends('layouts.app')

@section('content')

<h2 class="mb-3">Reservas</h2>

<a href="/reservas/create" class="btn btn-primary mb-3">+ Crear Reserva</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Laboratorio</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->usuario->nombre }}</td>
            <td>{{ $reserva->laboratorio->nombre }}</td>
            <td>{{ $reserva->fecha_inicio }}</td>
            <td>{{ $reserva->fecha_fin }}</td>

            <td>
                <a href="/reservas/{{ $reserva->id }}/edit" class="btn btn-warning btn-sm">Editar</a>

                <form action="/reservas/{{ $reserva->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection