@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                Detalle del Aprendiz
            </h5>

            <a href="{{ route('apprentice.list') }}" class="btn btn-sm btn-light">
                Volver
            </a>

        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    ID:
                </label>

                <p class="fs-5">
                    {{ $aprendice->_id }}
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Nombre del Aprendiz:
                </label>

                <p class="fs-5">
                    {{ $aprendice->name }}
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Correo del Aprendiz:
                </label>

                <p class="fs-5">
                    {{ $aprendice->email }}
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Número del Aprendiz:
                </label>

                <p class="fs-5">
                    {{ $aprendice->cell_number }}
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Curso del Aprendiz:
                </label>

                <p class="fs-5">
                    {{ $aprendice->course_id }}
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Computador del Aprendiz:
                </label>

                <p class="fs-5">
                    {{ $aprendice->computer_id }}
                </p>
            </div>

        </div>

        <div class="card-footer text-end">

            <a href="{{ route('apprentice.list') }}"
               class="btn btn-secondary">
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection