<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin SENA</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Dependencias -->
    @include('includes.dependencias')

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Cargar tema guardado antes de mostrar la página -->
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

</head>

<body>

    <!-- Navbar -->
    @include('includes.navbar')


    <!-- Contenido -->
    <div class="container mt-4">

        @yield('content')

    </div>


    <!-- Footer -->
    @include('includes.footer')


    <!-- Dependencias JS -->
    @include('includes.dependenciasbody')


    <!-- Modo oscuro -->
    <script>

        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const themeText = document.getElementById('themeText');


        function actualizarTema() {

            const modoOscuro =
                document.documentElement.classList.contains('dark-mode');


            if (modoOscuro) {

                themeIcon.className = 'fa-solid fa-sun';

                if (themeText) {
                    themeText.textContent = 'Claro';
                }

            } else {

                themeIcon.className = 'fa-solid fa-moon';

                if (themeText) {
                    themeText.textContent = 'Oscuro';
                }

            }

        }


        if (themeToggle) {

            themeToggle.addEventListener('click', function () {

                document.documentElement.classList.toggle('dark-mode');


                const modoOscuro =
                    document.documentElement.classList.contains('dark-mode');


                if (modoOscuro) {

                    localStorage.setItem('theme', 'dark');

                } else {

                    localStorage.setItem('theme', 'light');

                }


                actualizarTema();

            });

        }


        actualizarTema();

    </script>

</body>

</html>