@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Municipios</h1>
    <a href="{{ route('municipio.create') }}" class="btn btn-primary">Nuevo Municipio</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
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
                        <a href="{{ route('municipio.edit', $municipio->muni_codi) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('municipio.destroy', $municipio->muni_codi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $municipios->links() }} <!-- Agregar paginación -->
</div>
@endsection
