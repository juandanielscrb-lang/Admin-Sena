@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">

        <h1>¿Quiénes somos?</h1>

        <p class="text-muted">
            Conoce nuestra misión y visión como institución.
        </p>

    </div>

    <div class="row g-4">

        {{-- MISIÓN --}}
        <div class="col-md-6">

            <div class="card h-100 shadow-sm">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-bullseye fs-1 text-success"></i>
                    </div>

                    <h2 class="card-title">
                        Misión
                    </h2>

                    <p class="card-text mt-3">
                        Brindar formación profesional integral que contribuya
                        al desarrollo de las personas y al fortalecimiento
                        de sus competencias para el mundo laboral.
                    </p>

                </div>

            </div>

        </div>

        {{-- VISIÓN --}}
        <div class="col-md-6">

            <div class="card h-100 shadow-sm">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-eye fs-1 text-success"></i>
                    </div>

                    <h2 class="card-title">
                        Visión
                    </h2>

                    <p class="card-text mt-3">
                        Ser una institución reconocida por ofrecer formación
                        de calidad, promoviendo el crecimiento personal,
                        académico y profesional de sus aprendices.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection