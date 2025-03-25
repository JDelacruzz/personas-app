<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Country</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Edit Country</h2>

            <form method="POST" action="{{ route('pais.update', ['pais' => $pais->pais_codi]) }}">
                @method('put')
                @csrf

                <div class="mb-3">
                    <label for="codigo" class="form-label fw-bold">Code</label>
                    <input type="text" class="form-control" id="codigo" name="codigo"
                        disabled value="{{ $pais->pais_codi }}">
                    <small class="form-text text-muted">Country code</small>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Country Name</label>
                    <input type="text" required class="form-control" id="name" name="pais_nomb" 
                        value="{{ $pais->pais_nomb }}">
                </div>

                <div class="mb-3">
                    <label for="capital" class="form-label fw-bold">Capital</label>
                    <input type="text" required class="form-control" id="capital" name="pais_capi" 
                        value="{{ $pais->pais_capi }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('pais.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
