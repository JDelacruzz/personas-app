<form action="{{ route('municipio.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nombre del Municipio:</label>
        <input type="text" name="muni_nomb" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Departamento:</label>
        <select name="depa_codi" class="form-control" required>
            <option value="">Seleccione un departamento</option>
            @foreach($departamentos as $departamento)
                <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
