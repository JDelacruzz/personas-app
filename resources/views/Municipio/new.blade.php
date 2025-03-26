<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar Municipio</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-primary mb-4">Agregar Municipio</h1>

            <form action="{{ route('municipio.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="muni_nomb" class="form-label">Nombre del Municipio</label>
                    <input type="text" class="form-control" id="muni_nomb" name="muni_nomb" required placeholder="Ingrese el nombre del municipio">
                </div>

                <div class="mb-3">
                    <label for="depa_codi" class="form-label">Departamento</label>
                    <select class="form-select" id="depa_codi" name="depa_codi" required>
                        <option selected disabled value="">Seleccione un departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('municipio.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
