<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Municipio</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Municipio</h1>
        <form method="POST" action="{{ route('municipios.update', $municipio->id_municipio) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Municipio</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $municipio->nombre_municipio }}" required>
            </div>

            <div class="mb-3">
                <label for="id_departamento" class="form-label">Departamento</label>
                <select class="form-select" id="id_departamento" name="id_departamento" required>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->id_departamento }}" {{ $municipio->id_departamento == $departamento->id_departamento ? 'selected' : '' }}>
                            {{ $departamento->nombre_departamento }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
</body>
</html>
