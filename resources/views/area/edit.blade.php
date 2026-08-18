@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Editar Área</h1>

    <form action="{{ route('area.update', $area->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">
                Nombre del Área
            </label>

            <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                value="{{ old('name', $area->name) }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-success">
            Actualizar Área
        </button>

        <a href="{{ route('area.list') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection