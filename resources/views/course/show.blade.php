@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Detalle del Curso
            </h4>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>ID:</strong>
                <p>{{ $course->id }}</p>
            </div>

            <div class="mb-3">
                <strong>Número del Curso:</strong>
                <p>{{ $course->course_number }}</p>
            </div>

            <div class="mb-3">
                <strong>Área:</strong>
                <p>{{ $course->area_id }}</p>
            </div>

            <div class="mb-3">
                <strong>Centro de Formación:</strong>
                <p>{{ $course->training_center_id }}</p>
            </div>

        </div>

        <div class="card-footer">

            <a href="{{ route('course.list') }}"
               class="btn btn-secondary">
                Regresar
            </a>

            <a href="{{ route('course.edit', $course->id) }}"
               class="btn btn-warning">
                Editar
            </a>

        </div>

    </div>

</div>

@endsection