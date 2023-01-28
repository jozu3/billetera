<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use App\Models\Jugadore;
use App\Models\Medio;
use App\Models\Recarga;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.recargas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuentas = Cuenta::pluck('name', 'id');
        $medios = Medio::pluck('name', 'id');
        return view('admin.recargas.create', compact('cuentas', 'medios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jugadore_id' => 'required|exists:App\Models\Jugadore,id',
            'cuenta_id' => 'required|exists:App\Models\Cuenta,id',
            'monto' => 'gt:0|numeric',
            'fecha' => 'required|date|before_or_equal:fecha_atencion',
            'numoperacion' => Rule::requiredIf(fn () => $request->cuenta_id != 5),
            'fecha_atencion' => 'required|date|after_or_equal:fecha',
            'medio_id' => 'required|exists:App\Models\Medio,id',
        ]);

        $request['user_id'] = auth()->user()->id;
        // $request['updated_by'] = '';
        
        $recarga = Recarga::create($request->all());

        if ($recarga) {
            $jugadore = Jugadore::find($request->jugadore_id);

            $jugadore->update([
                'saldo' => $jugadore->saldo + $request->monto
            ]);
            
        }
        
        return redirect()->route('admin.jugadores.show', $request->jugadore_id)->with('info', 'Se realizó la recarga con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function show(Recarga $recarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Recarga $recarga)
    {
        $cuentas = Cuenta::pluck('name', 'id');
        $medios = Medio::pluck('name', 'id');

        return view('admin.recargas.edit', compact('recarga', 'cuentas', 'medios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recarga $recarga)
    {
        $request->validate([
            'jugadore_id' => 'required|exists:App\Models\Jugadore,id',
            'cuenta_id' => 'required|exists:App\Models\Cuenta,id',
            'monto' => 'gt:0|numeric',
            'fecha' => 'required|date|before_or_equal:fecha_atencion',
            'numoperacion' => Rule::requiredIf(fn () => $request->cuenta_id != 5),
            'fecha_atencion' => 'required|date|after_or_equal:fecha',
            'medio_id' => 'required|exists:App\Models\Medio,id',
            'motivo_update' => 'required|max:256',
        ]);
        
        $request['updated_by'] = auth()->user()->id;
        $monto_anterior = $recarga->monto;

        $update = $recarga->update($request->all());

        if ($update) {
            $jugadore = Jugadore::find($request->jugadore_id);

            $jugadore->update([
                'saldo' => $jugadore->saldo - $monto_anterior + $request->monto
            ]);
            
        }

        return redirect()->route('admin.jugadores.show', $request->jugadore_id)->with('info', 'Se realizó la recarga con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recarga $recarga)
    {
        //
    }
}
