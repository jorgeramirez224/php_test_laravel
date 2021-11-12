<div>
    <form wire:submit.prevent="editar">
    <div class="row">
        <div class="col-6 mx-auto">

                <div class="mb-3">
                  <label>Título</label>
                  <input wire:model.defer="libro.titulo" type="text" class="form-control">
                  @error('libro.titulo') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="mb-3">
                  <label>Editorial</label>
                  <input wire:model.defer="libro.editorial" type="text" class="form-control">
                  @error('libro.editorial') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="mb-3">
                  <label>Autor</label>
                  <input wire:model.defer="libro.autor" type="text" class="form-control">
                  @error('libro.autor') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="mb-3">
                  <label>Fecha de lanzamiento</label>
                  <input wire:model.defer="libro.fecha_lanzamiento" type="text" class="form-control">
                  @error('libro.fecha_lanzamiento') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <button type="submit" class="btn btn-success">Modificar</button>
                <a href="{{route('libros.index')}}" type="submit" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</form>
</div>
