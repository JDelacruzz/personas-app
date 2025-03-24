@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white">
            <h3 class="mb-0">Editar Municipio</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('municipio.update', $municipio->muni_codi) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre del Municipio:</label>
                    <input type="text" name="muni_nomb" value="{{ $municipio->muni_nomb }}" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('municipio.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
