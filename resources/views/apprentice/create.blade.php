@extends('layouts.app')

@section('content')

<h1>Formulario aprendiz</h1>

<form action="{{ route('apprentice.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Numero de celular:</label>
        <input type="number" name="cell_number" class="form-control">
    </div>

    <div class="mb-3">
        <label>Selecciona el curso</label>
        <select name="course_id" class="form-control">
            <option value="">Selecciona un curso</option>

            @foreach ($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->course_number }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Selecciona un computador</label>
        <select name="computer_id" class="form-control">
            <option value="">Selecciona un computador</option>

            @foreach ($computers as $computer)
                <option value="{{ $computer->id }}">
                    {{ $computer->number }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Enviar Formulario
    </button>

</form>

@endsection