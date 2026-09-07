@extends('layouts.app')

@section('content')

<div class="container mt-4">

```
<h1>Editar Computadora</h1>

<form action="{{ route('computer.update', $computer->id) }}" method="POST" enctype="multipart/form-data">

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

    {{-- FOTO ACTUAL --}}
    <div class="mb-3">

        <label class="form-label">
            Foto actual
        </label>

        <div class="mb-3">

            @if($computer->urlFoto)

                <img
                    src="{{ asset('storage/images/' . $computer->urlFoto) }}"
                    alt="Imagen actual del computador"
                    width="200"
                    height="160"
                    style="object-fit: cover; border-radius: 8px;"
                >

            @else

                <p class="text-muted">
                    Esta computadora no tiene una foto.
                </p>

            @endif

        </div>

    </div>

    {{-- NUEVA FOTO --}}
    <div class="mb-3">

        <label for="urlFoto" class="form-label">
            Cambiar foto
        </label>

        <input
            type="file"
            name="urlFoto"
            id="urlFoto"
            class="form-control"
            accept="image/*"
        >

        <small class="text-muted">
            Déjalo vacío si quieres conservar la foto actual.
        </small>

    </div>

    <button type="submit" class="btn btn-success">
        Actualizar Computadora
    </button>

    <a href="{{ route('computer.list') }}" class="btn btn-secondary">
        Cancelar
    </a>

</form>
```

</div>

@endsection
