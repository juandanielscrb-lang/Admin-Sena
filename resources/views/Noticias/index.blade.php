@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h1>Noticias y Eventos</h1>

        <p class="text-muted">
            Conoce las últimas noticias y actividades del SENA.
        </p>

    </div>

    <div class="row g-4">

        {{-- NOTICIA 1 --}}
        <div class="col-md-4">

            <div class="card h-100 shadow-sm">

                <img
                    src="{{ asset('images/noticia1.jpg') }}"
                    class="card-img-top"
                    style="height: 220px; object-fit: cover;"
                    alt="Noticias SENA"
                >

                <div class="card-body">

                    <h5 class="card-title">
                        Formación para el futuro
                    </h5>

                    <p class="card-text">
                        El SENA continúa ofreciendo oportunidades
                        de formación para fortalecer las competencias
                        de sus aprendices.
                    </p>

                    <span class="badge bg-success">
                        Noticia
                    </span>

                </div>

            </div>

        </div>

        {{-- EVENTO 1 --}}
        <div class="col-md-4">

            <div class="card h-100 shadow-sm">

                <img
                    src="{{ asset('images/evento1.jpg') }}"
                    class="card-img-top"
                    style="height: 220px; object-fit: cover;"
                    alt="Evento SENA"
                >

                <div class="card-body">

                    <h5 class="card-title">
                        Jornada de formación
                    </h5>

                    <p class="card-text">
                        Participa en las actividades de formación
                        y espacios de aprendizaje organizados
                        por nuestra institución.
                    </p>

                    <span class="badge bg-primary">
                        Evento
                    </span>

                </div>

            </div>

        </div>

        {{-- NOTICIA 2 --}}
        <div class="col-md-4">

            <div class="card h-100 shadow-sm">

                <img
                    src="{{ asset('images/noticia2.jpg') }}"
                    class="card-img-top"
                    style="height: 220px; object-fit: cover;"
                    alt="Aprendices SENA"
                >

                <div class="card-body">

                    <h5 class="card-title">
                        Nuevas oportunidades para aprendices
                    </h5>

                    <p class="card-text">
                        Conoce las nuevas oportunidades y programas
                        disponibles para los aprendices.
                    </p>

                    <span class="badge bg-success">
                        Noticia
                    </span>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection