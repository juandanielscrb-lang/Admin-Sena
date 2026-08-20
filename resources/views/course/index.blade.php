@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Cursos</h1>

        <a href="{{ route('course.create') }}" class="btn btn-primary">
            Nuevo Curso
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('course.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por número de curso o día..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))

                <a href="{{ route('course.list') }}" class="btn btn-secondary">
                    Limpiar
                </a>

            @endif

        </div>

    </form>

    {{-- TABLA --}}
    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Número del Curso</th>
                <th>Día</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($courses as $course)

                <tr>

                    <td>
                        {{ $course->id }}
                    </td>

                    <td>
                        {{ $course->course_number }}
                    </td>

                    <td>
                        {{ $course->day }}
                    </td>

                    <td>
                        {{ $course->area->name ?? 'Sin área' }}
                    </td>

                    <td>
                        {{ $course->training_center->name ?? 'Sin centro' }}
                    </td>

                    <td>

                        {{-- VER --}}
                        <a
                            href="{{ route('course.show', $course->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a
                            href="{{ route('course.edit', $course->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('course.destroy', $course->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este curso?')"
                            >
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="text-center">

                        @if(request('search'))

                            No se encontraron cursos para
                            "{{ request('search') }}".

                        @else

                            No hay cursos registrados.

                        @endif

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection