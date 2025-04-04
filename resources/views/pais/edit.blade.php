<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Pais</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-primary mb-4">Editar Pais</h1>

            <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
                @method('put')
                @csrf

                <div class="mb-3">
                    <label for="codigo" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" disabled value="{{ $pais->pais_codi }}">
                    <div id="codigoHelp" class="form-text">Pais Id.</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Pais</label>
                    <input type="text" required class="form-control" id="name" name="name" value="{{ $pais->pais_nomb }}">
                </div>

                <div class="mb-3">
                    <label for="capital" class="form-label">Capital</label>
                    <select class="form-select" id="capital" name="code" required>
                        <option selected disabled value="">Escoge...</option>
                        @foreach ($municipios as $municipio)
                        @if ($municipio->muni_codi == $pais->pais_capi)
                        <option selected value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                        @else
                        <option value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>


                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
