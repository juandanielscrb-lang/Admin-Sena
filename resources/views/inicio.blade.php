@extends('layouts.app')

@section('content')

<div class="container mt-4">

    {{-- BIENVENIDA --}}
    <div class="text-center mb-5">
        <h1>Bienvenido a Admin SENA</h1>

        <p class="lead">
            Sistema de administración y gestión de información.
        </p>
    </div>


    <div class="row">

        {{-- MISIÓN --}}
        <div class="col-md-6 mb-4">

            <div class="card h-100 shadow">

                <div class="card-header bg-success text-white">
                    <h2 class="h4 mb-0">Misión</h2>
                </div>

                <div class="card-body">

                    <p>
                        Admin SENA tiene como misión facilitar la gestión
                        y administración de la información relacionada con
                        aprendices, instructores, cursos, centros de formación,
                        áreas y recursos tecnológicos de la institución.
                    </p>

                </div>

            </div>

        </div>


        {{-- VISIÓN --}}
        <div class="col-md-6 mb-4">

            <div class="card h-100 shadow">

                <div class="card-header bg-success text-white">
                    <h2 class="h4 mb-0">Visión</h2>
                </div>

                <div class="card-body">

                    <p>
                        Ser una herramienta eficiente, organizada y fácil
                        de utilizar que permita mejorar la administración
                        de la información del SENA y apoyar los procesos
                        académicos y administrativos de la institución.
                    </p>

                </div>

            </div>

        </div>

    </div>


    {{-- CONTÁCTANOS --}}
    <div class="card shadow mt-3 mb-5">

        <div class="card-header bg-success text-white">
            <h2 class="h4 mb-0">Contáctanos</h2>
        </div>

        <div class="card-body">

            <div class="row text-center">

                <div class="col-md-4 mb-3">

                    <h5>📍 Dirección</h5>

                    <p>
                        Centro de Formación SENA
                    </p>

                </div>


                <div class="col-md-4 mb-3">

                    <h5>📞 Teléfono</h5>

                    <p>
                        +57 000 000 0000
                    </p>

                </div>


                <div class="col-md-4 mb-3">

                    <h5>📧 Correo</h5>

                    <p>
                        contacto@adminsena.com
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection