<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Municipio</title>
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-3">Editar Municipio</h1>
    <form method="POST" action="{{ route('municipios.update', $municipio->id_municipio) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Municipio</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $municipio->nombre_municipio }}" required>
        </div>

        <div class="mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <select class="form-select" id="departamento" name="id_departamento" required>
                <option selected disabled value="">Seleccione un departamento...</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id_departamento }}" {{ $departamento->id_departamento == $municipio->id_departamento ? 'selected' : '' }}>
                        {{ $departamento->nombre_departamento }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
