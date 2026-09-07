@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>Lista de Computadoras</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-primary">
            Nueva Computadora
        </a>

    </div>

    {{-- BUSCADOR --}}
    <form action="{{ route('computer.list') }}" method="GET" class="mb-4">

        <div class="input-group">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Buscar por número o marca..."
                value="{{ request('search') }}"
            >

            <button type="submit" class="btn btn-primary">
                Buscar
            </button>

            @if(request('search'))

                <a href="{{ route('computer.list') }}" class="btn btn-secondary">
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
                <th>Número</th>
                <th>Marca</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

            @forelse($computers as $computer)

                <tr>

                    <td>
                        {{ $computer->id }}
                    </td>

                    <td>
                        {{ $computer->number }}
                    </td>

                    <td>
                        {{ $computer->brand }}
                    </td>

                    {{-- FOTO --}}
                    <td>
                        @if($computer->urlFoto)

                            <img
                                src="{{ asset('storage/images/' . $computer->urlFoto) }}"
                                alt="Imagen del computador"
                                width="80"
                                height="80"
                                style="object-fit: cover; border-radius: 5px;"
                            >

                        @else

                            Sin imagen

                        @endif
                    </td>

                    {{-- ACCIONES --}}
                    <td>

                        {{-- VER --}}
                        <a
                            href="{{ route('computer.show', $computer->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Ver
                        </a>

                        {{-- EDITAR --}}
                        <a
                            href="{{ route('computer.edit', $computer->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Editar
                        </a>

                        {{-- ELIMINAR --}}
                        <form
                            action="{{ route('computer.destroy', $computer->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar esta computadora?')"
                            >
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="5" class="text-center">

                        @if(request('search'))

                            No se encontraron computadoras para
                            "{{ request('search') }}".

                        @else

                            No hay computadoras registradas.

                        @endif

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection