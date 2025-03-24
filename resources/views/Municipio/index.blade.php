@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Lista de Municipios</h3>
            <a href="{{ route('municipio.create') }}" class="btn btn-light">Nuevo Municipio</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipios as $municipio)
                        <tr>
                            <td>{{ $municipio->muni_codi }}</td>
                            <td>{{ $municipio->muni_nomb }}</td>
                            <td>
                                <a href="{{ route('municipio.edit', $municipio->muni_codi) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('municipio.destroy', $municipio->muni_codi) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este municipio?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $municipios->links('pagination::bootstrap-5') }} <!-- Paginación Bootstrap -->
            </div>
        </div>
    </div>
</div>
@endsection
