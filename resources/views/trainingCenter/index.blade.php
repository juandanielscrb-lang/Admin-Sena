@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Centros de Formación</h1>

        <a href="{{ route('trainingCenter.create') }}" class="btn btn-primary">
            Nuevo Centro
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('trainingCenter.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por nombre o ubicación..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))
                <a href="{{ route('trainingCenter.list') }}" class="btn btn-secondary">
                    Limpiar
                </a>
            @endif

        </div>

    </form>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($centers as $center)

                <tr>

                    <td>{{ $center->name }}</td>

                    <td>{{ $center->location }}</td>

                    <td>

                        {{-- VER --}}
                        <a href="{{ route('trainingCenter.show', $center->_id) }}"
                           class="btn btn-info btn-sm">
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a href="{{ route('trainingCenter.edit', $center->_id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('trainingCenter.destroy', $center->_id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este centro?')"
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
                            No se encontraron centros para
                            "{{ request('search') }}".
                        @else
                            No hay centros de formación registrados.
                        @endif

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection