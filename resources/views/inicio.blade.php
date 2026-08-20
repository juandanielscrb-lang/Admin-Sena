@extends('layouts.app')

@section('content')

{{-- CARRUSEL SENA --}}
<div id="carouselSena"
     class="carousel slide mb-5"
     data-bs-ride="carousel"
     data-bs-interval="4000">

     
    {{-- Indicadores --}}
    <div class="carousel-indicators">

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="0"
                class="active">
        </button>

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="1">
        </button>

        <button type="button"
                data-bs-target="#carouselSena"
                data-bs-slide-to="2">
        </button>

    </div>

    {{-- Imágenes --}}
    <div class="carousel-inner">

        <div class="carousel-item active">

            <img
                src="{{ asset('images/Sena1.jpg') }}"
                class="d-block w-100"
                style="height: 450px; object-fit: cover;"
                alt="SENA"
            >

            <div class="carousel-caption d-none d-md-block">
                <h2>Servicio Nacional de Aprendizaje</h2>
                <p>Formación para el desarrollo profesional.</p>
            </div>

        </div>

        <div class="carousel-item">

            <img
                src="{{ asset('images/Sena2.jpg') }}"
                class="d-block w-100"
                style="height: 450px; object-fit: cover;"
                alt="Formación SENA"
            >

            <div class="carousel-caption d-none d-md-block">
                <h2>Formación de calidad</h2>
                <p>Preparación para el mundo laboral.</p>
            </div>

        </div>

        <div class="carousel-item">

            <img
                src="{{ asset('images/Sena3.jpg') }}"
                class="d-block w-100"
                style="height: 450px; object-fit: cover;"
                alt="Aprendices SENA"
            >

            <div class="carousel-caption d-none d-md-block">
                <h2>Aprendices SENA</h2>
                <p>Educación y oportunidades para todos.</p>
            </div>

        </div>

    </div>

    {{-- Botón anterior --}}
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselSena"
        data-bs-slide="prev"
    >

        <span class="carousel-control-prev-icon"></span>

        <span class="visually-hidden">
            Anterior
        </span>

    </button>

    {{-- Botón siguiente --}}
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselSena"
        data-bs-slide="next"
    >

        <span class="carousel-control-next-icon"></span>

        <span class="visually-hidden">
            Siguiente
        </span>

    </button>

</div>

@endsection