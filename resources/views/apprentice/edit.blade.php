@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Actualizar aprendiz</h1>

    <form
        action="{{ route('apprentice.update', ['apprentice' => $aprendice->id]) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label class="form-label">
            Nombre:
        </label>

        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name', $aprendice->name) }}"
        >

        <br>

        <label class="form-label">
            Email:
        </label>

        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ old('email', $aprendice->email) }}"
        >

        <br>

        <label class="form-label">
            Número de celular:
        </label>

        <input
            type="number"
            name="cell_number"
            class="form-control"
            value="{{ old('cell_number', $aprendice->cell_number) }}"
        >

        <br>

        <label class="form-label">
            Curso:
        </label>

        <select name="course_id" class="form-select">

            @foreach ($cursos as $curso)

                <option
                    value="{{ $curso->id }}"
                    {{ $aprendice->course_id == $curso->id ? 'selected' : '' }}
                >
                    {{ $curso->course_number }}
                </option>

            @endforeach

        </select>

        <br>

        <label class="form-label">
            Computadora:
        </label>

        <select name="computer_id" class="form-select">

            @foreach ($computers as $computer)

                <option
                    value="{{ $computer->id }}"
                    {{ $aprendice->computer_id == $computer->id ? 'selected' : '' }}
                >
                    {{ $computer->number }}
                </option>

            @endforeach

        </select>

        <br>

        <button type="submit" class="btn btn-success">
            Actualizar Aprendiz
        </button>

        <a href="{{ route('apprentice.list') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection