@extends('layouts.app')

@section('content')

<h1>Formulario Training Center</h1>

<form action="{{ route('trainingCenter.store') }}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>

    <br><br>

    <label>
        Locación:
        <br>
        <input type="text" name="location">
    </label>

    <br><br>

    <button type="submit">Enviar Formulario</button>

</form>

@endsection