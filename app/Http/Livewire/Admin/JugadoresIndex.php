<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jugadore;
use Livewire\Component;
use Livewire\WithPagination;

class JugadoresIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $jugadores = Jugadore::where('name', 'like', '%'.$this->search.'%')->paginate();

        return view('livewire.admin.jugadores-index', compact('jugadores'));
    }
}
