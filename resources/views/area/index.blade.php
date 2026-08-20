@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Áreas</h1>

        <a href="{{ route('area.create') }}" class="btn btn-primary">
            Nueva Área
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('area.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar área..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))

                <a href="{{ route('area.list') }}" class="btn btn-secondary">
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
                <th>Nombre del Área</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($areas as $area)

                <tr>

                    <td>
                        {{ $area->id }}
                    </td>

                    <td>
                        {{ $area->name }}
                    </td>

                    <td>

                        {{-- VER --}}
                        <a
                            href="{{ route('area.show', $area->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a
                            href="{{ route('area.edit', $area->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('area.destroy', $area->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar esta área?')"
                            >
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="text-center">

                        @if(request('search'))

                            No se encontraron áreas para
                            "{{ request('search') }}".

                        @else

                            No hay áreas registradas.

                        @endif

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection