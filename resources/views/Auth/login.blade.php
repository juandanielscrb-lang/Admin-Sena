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
                        Admin SENA
                    </h3>

                    <p class="text-muted">
                        Inicia sesión para continuar
                    </p>

                </div>

                {{-- Errores --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                {{-- Formulario --}}
                <form action="{{ route('login.post') }}" method="POST">

                    @csrf

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
                               placeholder="admin@admin.com"
                               required>

                    </div>

                    {{-- Contraseña --}}
                    <div class="mb-4">

                        <label for="password" class="form-label">
                            <i class="fa-solid fa-lock"></i>
                            Contraseña
                        </label>

                        <div class="input-group">

                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Ingrese su contraseña"
                                   required>

                            <button type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="mostrarPassword()">

                                <i id="passwordIcon"
                                   class="fa-solid fa-eye"></i>

                            </button>

                        </div>

                    </div>

                    {{-- Botón --}}
                    <div class="d-grid">

                        <button type="submit"
                                class="btn btn-success btn-lg">

                            <i class="fa-solid fa-right-to-bracket"></i>
                            Iniciar sesión

                        </button>

                    </div>

                </form>

                {{-- Volver al inicio --}}
                <div class="text-center mt-4">

                    <a href="{{ route('inicio') }}"
                       class="text-decoration-none">

                        <i class="fa-solid fa-arrow-left"></i>
                        Volver al inicio

                    </a>

                </div>

                {{-- Crear usuario --}}
                <div class="text-center mt-3">

                    <span class="text-muted">
                        ¿No tienes una cuenta?
                    </span>

                    <a href="{{ route('register') }}"
                       class="text-decoration-none fw-bold">

                        Crear usuario

                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

<script>

function mostrarPassword() {

    const password = document.getElementById('password');
    const icon = document.getElementById('passwordIcon');

    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');

    }

}

</script>

@endsection