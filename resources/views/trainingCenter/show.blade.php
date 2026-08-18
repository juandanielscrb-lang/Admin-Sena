@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-dark text-white">
            <h1 class="h4 mb-0">Información del Teacher</h1>
        </div>

        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $teacher->id }}
            </p>

            <p>
                <strong>Nombre:</strong>
                {{ $teacher->name }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $teacher->email }}
            </p>

            <p>
                <strong>Área:</strong>
                {{ $teacher->area_id }}
            </p>

            <p>
                <strong>Centro de formación:</strong>
                {{ $teacher->training_center_id }}
            </p>

            <div class="mt-3">

                <a href="{{ route('teacher.list') }}"
                   class="btn btn-secondary">
                    Volver
                </a>

                <a href="{{ route('teacher.edit', $teacher->id) }}"
                   class="btn btn-warning">
                    Editar
                </a>

            </div>

        </div>

    </div>

</div>

@endsection