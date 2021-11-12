<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class LibrosGet extends Component
{
    public Libro $libro;

    public function render()
    {
        return view('livewire.libros.libros-get');
    }

}
