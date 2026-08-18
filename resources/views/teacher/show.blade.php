@extends('layouts.app')

@section('content')

<h1>Información del Teacher</h1>

<p>
    <strong>ID:</strong>
    {{ $teacher->id }}
</p>

<p>
    <strong>Nombre:</strong>
    {{ $teacher->name }}
</p>

<p>
    <strong>Email:</strong>
    {{ $teacher->email }}
</p>

<p>
    <strong>Área:</strong>
    {{ $teacher->area_id }}
</p>

<p>
    <strong>Centro de formación:</strong>
    {{ $teacher->training_center_id }}
</p>

<br>

<a href="{{ route('teacher.list') }}">
    Volver
</a>

<a href="{{ route('teacher.edit', $teacher->id) }}">
    Editar
</a>

@endsection