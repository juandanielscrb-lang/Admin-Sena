@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Aprendices</h1>

        <a href="{{ route('apprentice.create') }}" class="btn btn-primary">
            Nuevo Aprendiz
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('apprentice.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por nombre, email o celular..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))

                <a href="{{ route('apprentice.list') }}" class="btn btn-secondary">
                    Limpiar
                </a>

            @endif

        </div>

    </form>

    {{-- MENSAJE DE ÉXITO --}}
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    {{-- TABLA --}}
    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Curso</th>
                <th>Computadora</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($aprendices as $aprendice)

                <tr>

                    <td>
                        {{ $aprendice->id }}
                    </td>

                    <td>
                        {{ $aprendice->name }}
                    </td>

                    <td>
                        {{ $aprendice->email }}
                    </td>

                    <td>
                        {{ $aprendice->cell_number }}
                    </td>

                    <td>
                        {{ $aprendice->course->course_number ?? 'Sin curso' }}
                    </td>

                    <td>
                        {{ $aprendice->computer->number ?? 'Sin computadora' }}
                    </td>

                    <td>

                        {{-- VER --}}
                        <a
                            href="{{ route('apprentice.show', $aprendice->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a
                            href="{{ route('apprentice.edit', $aprendice->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('apprentice.destroy', $aprendice->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este aprendiz?')"
                            >
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">

                        @if(request('search'))

                            No se encontraron aprendices para
                            "{{ request('search') }}".

                        @else

                            No hay aprendices registrados.

                        @endif

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection