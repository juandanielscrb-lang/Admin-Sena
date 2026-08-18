@extends('layouts.app')

@section('content')

<h1>Editar Centro de Formación</h1>

<form action="{{ route('trainingCenter.update', $trainingCenter->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>
        Nombre:
        <br>
        <input 
            type="text" 
            name="name" 
            value="{{ $trainingCenter->name }}"
        >
    </label>

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

<br>

<a href="{{ route('trainingCenter.list') }}">
    Volver
</a>

@endsection