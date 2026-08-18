@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Detalle de la Computadora
            </h4>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>ID:</strong>
                <p>{{ $computer->id }}</p>
            </div>

            <div class="mb-3">
                <strong>Número:</strong>
                <p>{{ $computer->number }}</p>
            </div>

            <div class="mb-3">
                <strong>Marca:</strong>
                <p>{{ $computer->brand }}</p>
            </div>

        </div>

        <div class="card-footer">

            <a href="{{ route('computer.list') }}"
               class="btn btn-secondary">
                Regresar
            </a>

            <a href="{{ route('computer.edit', $computer->id) }}"
               class="btn btn-warning">
                Editar
            </a>

        </div>

    </div>

</div>

@endsection