@extends('layouts.app')

@section('content')

{{-- CARRUSEL PRINCIPAL --}}
<div id="carouselSena" class="carousel slide" data-bs-ride="carousel">

    {{-- INDICADORES --}}
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

    {{-- IMÁGENES --}}
    <div class="carousel-inner">

        {{-- IMAGEN 1 --}}
        <div class="carousel-item active">

            <img src="{{ asset('images/sena1.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="SENA">

            <div class="carousel-caption d-none d-md-block">

                <h1 class="fw-bold">
                    Bienvenido a Admin Sena
                </h1>

                <p>
                    Educación y formación para el desarrollo del país.
                </p>

            </div>

        </div>


        {{-- IMAGEN 2 --}}
        <div class="carousel-item">

            <img src="{{ asset('images/sena2.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="Formación SENA">

            <div class="carousel-caption d-none d-md-block">

                <h2 class="fw-bold">
                    Formación de calidad
                </h2>

                <p>
                    Aprende y desarrolla tus habilidades.
                </p>

            </div>

        </div>


        {{-- IMAGEN 3 --}}
        <div class="carousel-item">

            <img src="{{ asset('images/sena3.jpg') }}"
                 class="d-block w-100"
                 style="height: 450px; object-fit: cover;"
                 alt="Aprendices SENA">

            <div class="carousel-caption d-none d-md-block">

                <h2 class="fw-bold">
                    Oportunidades para todos
                </h2>

                <p>
                    Construye tu futuro con el SENA.
                </p>

            </div>

        </div>

    </div>


    {{-- BOTÓN ANTERIOR --}}
    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>


    {{-- BOTÓN SIGUIENTE --}}
    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>


{{-- BIENVENIDA --}}
<div class="container mt-5">

    <div class="text-center">

        <h2 class="fw-bold text-success">
            Nuestra plataforma
        </h2>

        <p class="text-muted">
            Administra de manera sencilla la información de aprendices,
            cursos, profesores, computadores, áreas y centros de formación.
        </p>

    </div>

</div>


{{-- ACCESOS RÁPIDOS --}}
<div class="container mt-5">

    <h2 class="text-center mb-4">
        Accesos rápidos
    </h2>

    <div class="row g-4">

        {{-- CURSOS --}}
        <div class="col-md-3">

            <div class="card text-center shadow-sm h-100">

                <div class="card-body">

                    <h1>📚</h1>

                    <h4>Cursos</h4>

                    <p class="text-muted">
                        Consulta los cursos disponibles.
                    </p>

                    <a href="{{ route('course.list') }}"
                       class="btn btn-success">
                        Ver cursos
                    </a>

                </div>

            </div>

        </div>


        {{-- APRENDICES --}}
        <div class="col-md-3">

            <div class="card text-center shadow-sm h-100">

                <div class="card-body">

                    <h1>👨‍🎓</h1>

                    <h4>Aprendices</h4>

                    <p class="text-muted">
                        Gestiona la información de los aprendices.
                    </p>

                    <a href="{{ route('apprentice.list') }}"
                       class="btn btn-success">
                        Ver aprendices
                    </a>

                </div>

            </div>

        </div>


        {{-- PROFESORES --}}
        <div class="col-md-3">

            <div class="card text-center shadow-sm h-100">

                <div class="card-body">

                    <h1>👨‍🏫</h1>

                    <h4>Profesores</h4>

                    <p class="text-muted">
                        Consulta y administra profesores.
                    </p>

                    <a href="{{ route('teacher.list') }}"
                       class="btn btn-success">
                        Ver profesores
                    </a>

                </div>

            </div>

        </div>


        {{-- CENTROS --}}
        <div class="col-md-3">

            <div class="card text-center shadow-sm h-100">

                <div class="card-body">

                    <h1>🏢</h1>

                    <h4>Centros</h4>

                    <p class="text-muted">
                        Consulta los centros de formación.
                    </p>

                    <a href="{{ route('trainingCenter.list') }}"
                       class="btn btn-success">
                        Ver centros
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- NOTICIAS --}}
<div class="container mt-5">

    <div class="text-center mb-4">

        <h2 class="fw-bold text-success">
            Noticias
        </h2>

        <p class="text-muted">
            Conoce las novedades de nuestra institución.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        📢 Nuevos cursos
                    </h5>

                    <p class="card-text">
                        Consulta nuestra oferta de formación disponible
                        para los aprendices.
                    </p>

                    <a href="{{ route('course.list') }}"
                       class="btn btn-outline-success">
                        Leer más
                    </a>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        🎓 Formación SENA
                    </h5>

                    <p class="card-text">
                        Encuentra información relacionada con los
                        programas de formación.
                    </p>

                    <a href="{{ route('course.list') }}"
                       class="btn btn-outline-success">
                        Ver cursos
                    </a>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        💻 Tecnología
                    </h5>

                    <p class="card-text">
                        Conoce los recursos tecnológicos disponibles
                        para la formación.
                    </p>

                    <a href="{{ route('computer.list') }}"
                       class="btn btn-outline-success">
                        Ver equipos
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- EVENTOS --}}
<div class="container mt-5 mb-5">

    <div class="text-center mb-4">

        <h2 class="fw-bold text-success">
            Próximos eventos
        </h2>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="card border-success shadow-sm">

                <div class="card-body">

                    <h5>
                        📅 Jornada de formación
                    </h5>

                    <p class="text-muted">
                        Actividades académicas para aprendices.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card border-success shadow-sm">

                <div class="card-body">

                    <h5>
                        💡 Feria tecnológica
                    </h5>

                    <p class="text-muted">
                        Presentación de proyectos tecnológicos.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card border-success shadow-sm">

                <div class="card-body">

                    <h5>
                        🎓 Actividades institucionales
                    </h5>

                    <p class="text-muted">
                        Conoce las próximas actividades del centro.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection