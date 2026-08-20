@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Profesores</h1>

        <a href="{{ route('teacher.create') }}" class="btn btn-primary">
            Nuevo Profesor
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('teacher.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por nombre o email..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))

                <a href="{{ route('teacher.list') }}" class="btn btn-secondary">
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
                <th>Nombre</th>
                <th>Email</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($teachers as $teacher)

                <tr>

                    <td>
                        {{ $teacher->id }}
                    </td>

                    <td>
                        {{ $teacher->name }}
                    </td>

                    <td>
                        {{ $teacher->email }}
                    </td>

                    <td>
                        {{ $teacher->area->name ?? 'Sin área' }}
                    </td>

                    <td>
                        {{ $teacher->training_center->name ?? 'Sin centro' }}
                    </td>

                    <td>

                        {{-- VER --}}
                        <a
                            href="{{ route('teacher.show', $teacher->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a
                            href="{{ route('teacher.edit', $teacher->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('teacher.destroy', $teacher->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este profesor?')"
                            >
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="text-center">
                        No hay profesores registrados.
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection