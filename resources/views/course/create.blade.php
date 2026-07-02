@extends('layouts.app')

@section('content')

<h1>Formulario curso</h1>

<form action="{{ route('course.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Numero del curso:</label>
        <input type="number" name="course_number" class="form-control">
    </div>

    <div class="mb-3">
        <label>Day:</label>
        <input type="text" name="day" class="form-control">
    </div>

    <div class="mb-3">
        <label>Selecciona el area</label>
        <select name="area_id" class="form-control">
            <option value="">Selecciona un area</option>

            @foreach ($areas as $area)
                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Selecciona un centro de formación</label>
        <select name="training_center_id" class="form-control">
            <option value="">Centro de formación</option>

            @foreach ($centers as $center)
                <option value="{{ $center->id }}">
                    {{ $center->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Guardar curso
    </button>

</form>

@endsection