@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Municipio</h1>

    <form action="{{ route('municipio.update', $municipio->muni_codi) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="muni_nomb" value="{{ $municipio->muni_nomb }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
