<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cuenta;
use App\Models\Medio;
use App\Models\Recarga;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RecargasIndex extends Component
{
    use WithPagination;

    public $search;
    public $medio_id;
    public $user_id;
    public $cuenta_id;
    public $finicio;
    public $ffin;

    protected $paginationTheme = 'bootstrap';

    protected $casts = [
        'finicio' => 'date:Y-m-d',
        'ffin' => 'date:Y-m-d',
    ];
    
    public function render()
    {
        $medios = Medio::all();
        $cuentas = Cuenta::all();
        $users = User::all();
        $that = $this;

        $recargas = Recarga::where(function($q) use ($that){
                        if ($that->medio_id != 0) {
                            $q = $q->where('medio_id', $that->medio_id);
                        }
                        if ($that->cuenta_id != 0) {
                            $q = $q->where('cuenta_id', $that->cuenta_id);
                        }
                        if ($that->search != '') {
                            $q = $q->whereHas('jugadore', function($qu) use ($that){
                                $qu->where('name', 'like', '%'. $that->search. '%');
                            });
                        }
                    })
                    ->where(function($q) use ($that){
                        if (!empty($that->finicio)) {
                            $q = $q->where('fecha', '>=', $that->finicio);
                        }
                        if (!empty($that->ffin)) {
                            $q = $q->where('fecha', '<=', $that->ffin);
                        }
                    })
                    ->paginate(50);
        
        return view('livewire.admin.recargas-index', compact('recargas', 'medios', 'cuentas', 'users'));
    }
}
