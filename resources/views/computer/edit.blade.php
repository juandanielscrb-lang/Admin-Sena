@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Editar Computadora</h1>

    <form action="{{ route('computer.update', $computer->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="number" class="form-label">
                Número de Computadora
            </label>

            <input
                type="number"
                name="number"
                id="number"
                class="form-control"
                value="{{ old('number', $computer->number) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">
                Marca
            </label>

            <input
                type="text"
                name="brand"
                id="brand"
                class="form-control"
                value="{{ old('brand', $computer->brand) }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-success">
            Actualizar Computadora
        </button>

        <a href="{{ route('computer.list') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

@endsection