<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Country</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Add Country</h2>

            <form method="POST" action="{{ route('pais.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label fw-bold">Code</label>
                    <input type="text" class="form-control" id="id" name="id" disabled>
                    <small class="form-text text-muted">Country code (auto-generated)</small>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Country Name</label>
                    <input type="text" required class="form-control" id="name" name="pais_nomb" placeholder="Enter country name">
                </div>

                <div class="mb-3">
                    <label for="capital" class="form-label fw-bold">Capital City</label>
                    <input type="text" required class="form-control" id="capital" name="pais_capi" placeholder="Enter capital city">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('pais.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
