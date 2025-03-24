<table class="table">
    <div>
        <h1> Comunne List</h1>
        <a href="{{ route('comunas.create') }}" class="btn btn-success">Add</a>
        <table class="table">  
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $comunas as $comuna )
    <tr>
      <th scope="row"{{ $comuna->comu_codi }}></th>
        <td>{{ $comuna->comu_nomb }}</td>
        <td>{{ $comuna->muni_nomb }}</td>
        <td><span>Actions</span></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  