<nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        {{-- Logo SENA --}}
        <a class="navbar-brand d-flex align-items-center"
           href="{{ route('inicio') }}">

            <img src="{{ asset('images/logoSena.png') }}"
                 alt="Logo SENA"
                 style="width: 50px; height: 50px; object-fit: contain;">

            <span class="ms-2 fw-bold">
                SENA
            </span>

        </a>

        {{-- Botón responsive --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                {{-- Inicio --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        <i class="fa-solid fa-house"></i>
                        Inicio
                    </a>
                </li>

                {{-- Quiénes somos --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('quienes.somos') }}">
                        <i class="fa-solid fa-users"></i>
                        ¿Quiénes somos?
                    </a>
                </li>

                {{-- Administración --}}
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        <i class="fa-solid fa-gear"></i>
                        Administración

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a href="{{ route('area.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-building me-2"></i>
                                Áreas

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('trainingCenter.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-school me-2"></i>
                                Centros de Formación

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('course.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-book me-2"></i>
                                Cursos

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('teacher.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-chalkboard-user me-2"></i>
                                Instructores

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('apprentice.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-user-graduate me-2"></i>
                                Aprendices

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('computer.list') }}"
                               class="dropdown-item">

                                <i class="fa-solid fa-computer me-2"></i>
                                Computadores

                            </a>
                        </li>

                    </ul>

                </li>

                {{-- Contáctanos --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactanos') }}">

                        <i class="fa-solid fa-phone"></i>
                        Contáctanos

                    </a>
                </li>

                {{-- Buscar --}}
                <li class="nav-item ms-lg-3">

                    <form class="d-flex">

                        <input type="search"
                               class="form-control form-control-sm"
                               placeholder="Buscar..."
                               style="width: 130px;">

                        <button type="submit"
                                class="btn btn-light btn-sm ms-1">

                            <i class="fa-solid fa-magnifying-glass"></i>

                        </button>

                    </form>

                </li>

                {{-- Iniciar sesión --}}
                <li class="nav-item ms-lg-3">
                    <a class="nav-link" href="{{ route('login') }}">
                        
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Iniciar sesión
                </a>
            
            </li>

                {{-- Modo oscuro --}}
                <li class="nav-item ms-lg-2">

                    <button id="themeToggle"
                            type="button"
                            class="theme-toggle">

                        <i id="themeIcon"
                           class="fa-solid fa-moon"></i>

                        <span id="themeText">
                            Oscuro
                        </span>

                    </button>

                </li>

            </ul>

        </div>

    </div>

</nav>