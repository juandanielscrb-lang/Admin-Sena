@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Detalle del Área
            </h4>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>ID:</strong>
                <p>{{ $area->id }}</p>
            </div>

            <div class="mb-3">
                <strong>Nombre del Área:</strong>
                <p>{{ $area->name }}</p>
            </div>

        </div>

        <div class="card-footer">

            <a href="{{ route('area.list') }}"
               class="btn btn-secondary">
                Regresar
            </a>

            <a href="{{ route('area.edit', $area->id) }}"
               class="btn btn-warning">
                Editar
            </a>

        </div>

    </div>

</div>

@endsection