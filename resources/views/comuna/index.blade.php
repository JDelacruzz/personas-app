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
        <td>
          <a href="{{ route('comunas.edit', ['comuna'=>$comuna->comu_codi]) }}"
          class="btn btn-info">Edit</a>
          <form action="{{ route('comunas.destroy',['comuna' => $comuna->comu_codi]) }}"
          method='POST' style="display: inline-block">
          @method('DELETE')
          @csrf
          <input class="btn btn danger" type="submit" value="Delete">
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  