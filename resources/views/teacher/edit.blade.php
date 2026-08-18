@extends('layouts.app')

@section('content')

<h1>Editar Teacher</h1>

<form action="{{ route('teacher.update', $teacher->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>
        Nombre:
        <br>
        <input 
            type="text" 
            name="name" 
            value="{{ $teacher->name }}"
        >
    </label>

    <br><br>

    <label>
        Email:
        <br>
        <input 
            type="email" 
            name="email" 
            value="{{ $teacher->email }}"
        >
    </label>

    <br><br>

    <label>Selecciona el área</label>
    <br>

    <select name="area_id" id="area_id">

        <option value="">Selecciona un área</option>

        @foreach ($areas as $area)
            <option 
                value="{{ $area->id }}"
                {{ $teacher->area_id == $area->id ? 'selected' : '' }}
            >
                {{ $area->name }}
            </option>
        @endforeach

    </select>

    <br><br>

    <label>Selecciona un centro de formación</label>
    <br>

    <select name="training_center_id" id="training_center_id">

        <option value="">Centro de formación</option>

        @foreach ($centers as $center)
            <option 
                value="{{ $center->id }}"
                {{ $teacher->training_center_id == $center->id ? 'selected' : '' }}
            >
                {{ $center->name }}
            </option>
        @endforeach

    </select>

    <br><br>

    <button type="submit">Actualizar</button>

</form>

@endsection