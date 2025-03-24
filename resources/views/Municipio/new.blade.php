@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Municipio</h1>

    <form action="{{ route('municipio.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="muni_nomb" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
