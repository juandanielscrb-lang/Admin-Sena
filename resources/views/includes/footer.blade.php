<footer class="bg-dark text-white mt-5">

<div class="container py-5">

    <div class="row">

        {{-- INFORMACIÓN --}}
        <div class="col-md-5 mb-4 mb-md-0">

            <div class="d-flex align-items-center mb-3">

                <img
                    src="{{ asset('images/logoSena.png') }}"
                    alt="Logo SENA"
                    width="55"
                    height="55"
                    class="bg-white rounded-circle p-1 me-3"
                >

                <div>
                    <h4 class="mb-0 fw-bold">
                        Admin SENA
                    </h4>

                    <small class="text-success">
                        Sistema de administración
                    </small>
                </div>

            </div>

            <p class="text-white-50">
                Sistema de gestión para administrar aprendices,
                cursos, computadores, instructores y centros
                de formación del SENA.
            </p>

        </div>


        {{-- ENLACES --}}
        <div class="col-md-3 mb-4 mb-md-0">

            <h5 class="fw-bold mb-3">
                Enlaces rápidos
            </h5>

            <div class="d-flex flex-column gap-2">

                <a
                    href="{{ route('inicio') }}"
                    class="text-white text-decoration-none"
                >
                    <i class="fa-solid fa-house me-2 text-success"></i>
                    Inicio
                </a>

                <a
                    href="#"
                    class="text-white text-decoration-none"
                >
                    <i class="fa-solid fa-circle-info me-2 text-success"></i>
                    Quiénes somos
                </a>

                <a
                    href="#"
                    class="text-white text-decoration-none"
                >
                    <i class="fa-solid fa-envelope me-2 text-success"></i>
                    Contacto
                </a>

            </div>

        </div>


        {{-- INFORMACIÓN DEL PROYECTO --}}
        <div class="col-md-4">

            <h5 class="fw-bold mb-3">
                Proyecto
            </h5>

            <p class="mb-2 text-white-50">
                <i class="fa-solid fa-code me-2 text-success"></i>
                Desarrollo de Software
            </p>

            <p class="mb-2 text-white-50">
                <i class="fa-solid fa-graduation-cap me-2 text-success"></i>
                Formación SENA
            </p>

            <p class="mb-3 text-white-50">
                <i class="fa-solid fa-location-dot me-2 text-success"></i>
                Popayán, Cauca
            </p>

            {{-- REDES --}}
            <div class="d-flex gap-3">

                <a
                    href="#"
                    class="text-white fs-5"
                    title="Facebook"
                >
                    <i class="fa-brands fa-facebook"></i>
                </a>

                <a
                    href="#"
                    class="text-white fs-5"
                    title="Instagram"
                >
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a
                    href="#"
                    class="text-white fs-5"
                    title="GitHub"
                >
                    <i class="fa-brands fa-github"></i>
                </a>

            </div>

        </div>

    </div>


    {{-- SEPARADOR --}}
    <hr class="border-secondary my-4">


    {{-- PARTE INFERIOR --}}
    <div class="row align-items-center">

        <div class="col-md-6 text-center text-md-start">

            <small class="text-white-50">
                © {{ date('Y') }} Admin SENA
            </small>

        </div>

        <div class="col-md-6 text-center text-md-end">

            <small class="text-white-50">

                Desarrollado con
                <i class="fa-solid fa-heart text-danger mx-1"></i>
                por aprendices SENA

            </small>

        </div>

    </div>

</div>

</footer>
