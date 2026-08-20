@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <div class="text-center mb-5">
        <h1>Contáctanos</h1>

        <p class="text-muted">
            ¿Tienes alguna pregunta? Estamos aquí para ayudarte.
        </p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-body p-4">

                    <form>

                        <div class="mb-3">

                            <label class="form-label">
                                Nombre
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Ingresa tu nombre"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Correo electrónico
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                placeholder="correo@ejemplo.com"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Asunto
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Asunto del mensaje"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Mensaje
                            </label>

                            <textarea
                                class="form-control"
                                rows="5"
                                placeholder="Escribe tu mensaje..."
                            ></textarea>

                        </div>

                        <div class="text-center">

                            <button
                                type="submit"
                                class="btn btn-success"
                            >
                                Enviar mensaje
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection