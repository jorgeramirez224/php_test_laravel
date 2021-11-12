<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class LibrosEdit extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.libros.libros-edit');
    }

    public function editar(){
        $this->validate();
        $this->libro->save();
        return redirect(route('libros.index'));
    }

    protected function rules(){
        return [
            'libro.titulo' => 'required|string',
            'libro.editorial' => 'required|string',
            'libro.autor' => 'required|string',
            'libro.fecha_lanzamiento' => 'required|string',
        ];
    }
}
