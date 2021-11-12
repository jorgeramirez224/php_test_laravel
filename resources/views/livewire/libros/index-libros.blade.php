<div>
    <table class="table table-striped">
        <thead class="table-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Editorial</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha de Lanzamiento</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($libros as $i)
                <tr>
                    <th scope="row">{{$i->id}}</th>
                    <td>{{$i->titulo}}</td>
                    <td>{{$i->editorial}}</td>
                    <td>{{$i->autor}}</td>
                    <td>{{$i->fecha_lanzamiento}}</td>
                    <td>
                        <a href="{{route('libros.get', $i)}}" title="Mostrar más"
                                        class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                        <a href="{{route('libros.edit', $i)}}" title="Editar/Modificar"
                                        class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      {{$libros->links()}}
</div>
