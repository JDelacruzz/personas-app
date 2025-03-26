<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Departamentos</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Lista Departamentos</h1>

        <a href="{{ route('departamentos.create') }}" class="btn btn-success mb-3">Añadir</a>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Departmento</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($departamentos as $departamento)
                    <tr>
                        <th scope="row">{{ $departamento->depa_codi }}</th>
                        <td>{{ $departamento->depa_nomb }}</td>
                        <td>{{ $departamento->pais_nomb }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('departamentos.edit', ['departamento' => $departamento->depa_codi]) }}" class="btn btn-info btn-sm">Editar</a>

                                <form action="{{ route('departamentos.destroy', ['departamento' => $departamento->depa_codi]) }}" method="POST" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
