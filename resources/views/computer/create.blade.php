@extends('layouts.app')

@section('content')

<h1>Formulario Computer</h1>

<form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Numero:</label>
        <input type="number" name="number" class="form-control">
    </div>

    <div class="mb-3">
        <label>Marca:</label>
        <input type="text" name="brand" class="form-control">
    </div>

    <div class="mb-3">
        <label>Foto del computador:</label>
        <input type="file" name="urlFoto" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">
        Enviar Formulario
    </button>
</form>

@endsection