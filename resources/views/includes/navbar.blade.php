<nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center"
           href="{{ route('inicio') }}">

            <img src="{{ asset('images/logoSena.png') }}"
                 alt="Logo SENA"
                 style="width: 50px; height: 50px; object-fit: contain;">

            <span class="ms-2 fw-bold">
                SENA
            </span>

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('quienes.somos') }}">
                        ¿Quiénes somos?
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        Administración

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('area.list') }}">
                                Áreas
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('trainingCenter.list') }}">
                                Centros de formación
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('computer.list') }}">
                                Computadores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('teacher.list') }}">
                                Intructores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('course.list') }}">
                                Cursos
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('apprentice.list') }}">
                                Aprendices
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactanos') }}">
                        Contáctanos
                    </a>
                </li>

                <li class="nav-item ms-lg-3">

                    <form class="d-flex">

                        <input type="search"
                               class="form-control form-control-sm"
                               placeholder="Buscar..."
                               style="width: 130px;">

                        <button type="submit"
                                class="btn btn-light btn-sm ms-1">
                            
                        </button>

                    </form>

                </li>

                <li class="nav-item ms-lg-3">
                    <a class="nav-link" href="#">
                         Iniciar sesión
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>