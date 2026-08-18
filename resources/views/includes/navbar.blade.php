<nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        {{-- LOGO SENA --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logoSena.png') }}"
                 alt="Logo SENA"
                 style="width: 50px; height: 50px; object-fit: contain;">
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav me-auto">

                {{-- INICIO --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Inicio
                    </a>
                </li>

                {{-- ÁREAS --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('area.list') }}">
                        Area
                    </a>
                </li>

                {{-- TRAINING CENTER --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trainingCenter.list') }}">
                        Training center
                    </a>
                </li>

                {{-- COMPUTADORAS --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computer.list') }}">
                        Computer
                    </a>
                </li>

                {{-- TEACHERS --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.list') }}">
                        Teachers
                    </a>
                </li>

                {{-- CURSOS --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.list') }}">
                        Cursos
                    </a>
                </li>

                {{-- APRENDICES --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apprentice.list') }}">
                        Aprendices
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>