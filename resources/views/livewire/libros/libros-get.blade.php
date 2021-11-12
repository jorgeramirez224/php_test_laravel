<div>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-center">{{$libro->titulo}}</h5>
          <p class="card-text text-center">{{$libro->editorial}}</p>
          <p class="card-text text-center">{{$libro->autor}}</p>
          <p class="card-text text-center">{{$libro->fecha_lanzamiento}}</p>
          <a  href="{{route('libros.index')}}" type="submit" class="btn btn-secondary">Regresar</a>
        </div>
      </div>
</div>
