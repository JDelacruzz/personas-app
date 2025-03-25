{{ dd($paises) }}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Países</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Country List</h1>

        <a href="{{ route('pais.create') }}" class="btn btn-success mb-3">Add Country</a>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Country</th>
                    <th scope="col">Capital</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pais as $p)
                <tr>
                    <th scope="row">{{ $p->pais_codi }}</th>
                    <td>{{ $p->pais_nomb }}</td>
                    <td>{{ $p->pais_capi }}</td>
                    <td>
                        <a href="{{ route('pais.edit', ['pais_codi' => $pais->pais_codi]) }}">Editar</a>


                        <form action="{{ route('pais.destroy', ['pais' => $p->pais_codi]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this country?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $pais->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
