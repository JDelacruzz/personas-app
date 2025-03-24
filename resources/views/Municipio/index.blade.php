<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Municipios</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Listado de Municipios</h1>
        <a href="{{ route('municipios.create') }}" class="btn btn-success mb-3">Agregar Municipio</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->id_municipio }}</td>
                    <td>{{ $municipio->nombre_municipio }}</td>
                    <td>{{ $municipio->departamento->nombre_departamento }}</td>
                    <td>
                        <a href="{{ route('municipios.edit', $municipio->id_municipio) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('municipios.destroy', $municipio->id_municipio) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
