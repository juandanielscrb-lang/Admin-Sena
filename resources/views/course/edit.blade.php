@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Editar Curso</h1>

    <form action="{{ route('course.update', $course->id) }}" method="POST">

        @csrf
        @method('PUT')

        {{-- Número del curso --}}
        <div class="mb-3">
            <label for="course_number" class="form-label">
                Número del Curso
            </label>

            <input
                type="text"
                name="course_number"
                id="course_number"
                class="form-control"
                value="{{ old('course_number', $course->course_number) }}"
                required
            >
        </div>

        {{-- Área --}}
        <div class="mb-3">
            <label for="area_id" class="form-label">
                Área
            </label>

            <select name="area_id" id="area_id" class="form-select" required>

                @foreach($areas as $area)

                    <option
                        value="{{ $area->id }}"
                        {{ $course->area_id == $area->id ? 'selected' : '' }}
                    >
                        {{ $area->name }}
                    </option>

                @endforeach

            </select>
        </div>

        {{-- Centro de formación --}}
        <div class="mb-3">
            <label for="training_center_id" class="form-label">
                Centro de Formación
            </label>

            <select
                name="training_center_id"
                id="training_center_id"
                class="form-select"
                required
            >

                @foreach($centers as $center)

                    <option
                        value="{{ $center->id }}"
                        {{ $course->training_center_id == $center->id ? 'selected' : '' }}
                    >
                        {{ $center->name }}
                    </option>

                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Actualizar Curso
        </button>

        <a href="{{ route('course.list') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection