@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">

        <div class="card shadow-lg border-0 login-card">

            <div class="card-body p-4">

                {{-- Logo --}}
                <div class="text-center mb-4">

                    <img src="{{ asset('images/logoSena.png') }}"
                         alt="Logo SENA"
                         style="width: 90px; height: 90px; object-fit: contain;">

                    <h3 class="fw-bold mt-3">
                        Crear usuario
                    </h3>

                    <p class="text-muted">
                        Regístrate en Admin SENA
                    </p>

                </div>

                {{-- Errores --}}
                @if ($errors->any())
                    <div class="alert alert-danger">

                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach

                    </div>
                @endif

                {{-- Formulario --}}
                <form action="{{ route('register.post') }}" method="POST">

                    @csrf

                    {{-- Nombre --}}
                    <div class="mb-3">

                        <label for="name" class="form-label">
                            <i class="fa-solid fa-user"></i>
                            Nombre
                        </label>

                        <input type="text"
                               id="name"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Ingrese su nombre"
                               required>

                    </div>

                    {{-- Correo --}}
                    <div class="mb-3">

                        <label for="email" class="form-label">
                            <i class="fa-solid fa-envelope"></i>
                            Correo electrónico
                        </label>

                        <input type="email"
                               id="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="correo@ejemplo.com"
                               required>

                    </div>

                    {{-- Contraseña --}}
                    <div class="mb-3">

                        <label for="password" class="form-label">
                            <i class="fa-solid fa-lock"></i>
                            Contraseña
                        </label>

                        <input type="password"
                               id="password"
                               name="password"
                               class="form-control"
                               placeholder="Mínimo 8 caracteres"
                               required>

                    </div>

                    {{-- Confirmar contraseña --}}
                    <div class="mb-4">

                        <label for="password_confirmation" class="form-label">
                            <i class="fa-solid fa-lock"></i>
                            Confirmar contraseña
                        </label>

                        <input type="password"
                               id="password_confirmation"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Repita su contraseña"
                               required>

                    </div>

                    {{-- Crear usuario --}}
                    <div class="d-grid">

                        <button type="submit"
                                class="btn btn-success btn-lg">

                            <i class="fa-solid fa-user-plus"></i>
                            Crear usuario

                        </button>

                    </div>

                </form>

                {{-- Volver al login --}}
                <div class="text-center mt-4">

                    <span class="text-muted">
                        ¿Ya tienes una cuenta?
                    </span>

                    <a href="{{ route('login') }}"
                       class="text-decoration-none fw-bold">

                        Iniciar sesión

                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection