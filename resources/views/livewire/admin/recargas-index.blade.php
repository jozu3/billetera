<div>
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col">
                    <input wire:model="search" class="form-control" placeholder="Ingrese jugador">
                </div>
                <div class="col">
                    <select wire:model="medio_id" class="form-control" id="">
                        <option value="0">- Todos los medios -</option>
                        @foreach ($medios as $medio)
                            <option value="{{$medio->id}}">{{$medio->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select wire:model="cuenta_id" class="form-control" id="">
                        <option value="0">- Todas las cuentas -</option>
                        @foreach ($cuentas as $cuenta)
                            <option value="{{$cuenta->id}}">{{$cuenta->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select wire:model="user_id" class="form-control" id="">
                        <option value="0">- Todas los promotores -</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col">
                    <label for="">Fecha de inicio:</label>
                    <input type="date" wire:model="finicio" value="" class="form-control">
                </div>
                <div class="col">
                    <label for="">Fecha de fin:</label>
                    <input type="date" wire:model="ffin" value="" class="form-control">
                </div>
            </div>
        </div>
        <div class="card-body overflow-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cuenta</th>
                        <th>Num. Operación</th>
                        <th>Monto</th>
                        <th>Fecha de recarga</th>
                        <th>Jugador</th>
                        <th>Fecha de atención</th>
                        <th>Medio de atención</th>
                        <th>Recargado por:</th>
                        <th>Modificado por:</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recargas as $recarga)
                        <tr>
                            <td>{{ $recarga->id }}</td>
                            <td>{{ $recarga->cuenta->name }}</td>
                            <td>{{ $recarga->numoperacion }}</td>
                            <td class="text-success">
                                <i class="fas fa-arrow-alt-circle-up text-success"></i>
                                S/ {{ number_format($recarga->monto, 2, ',', ' ') }}
                            </td>
                            <td>{{ date( 'd/m/Y', strtotime($recarga->fecha)) }}</td>
                            <td>{{ $recarga->jugadore->name }}</td>
                            <td>{{ date( 'd/m/Y', strtotime($recarga->fecha_atencion)) }}</td>
                            <td>{{ $recarga->medio->name }}</td>
                            <td>{{ $recarga->user->name }}</td>
                            <td>
                                @if (!empty($recarga->updated_by))
                                    {{ $recarga->updatedBy->name }}
                                    <br>
                                    <b>Motivo:</b>
                                    {{ $recarga->motivo_update }}
                                @endif
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.recargas.edit', $recarga) }}" class="btn btn-link"><i
                                            class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="form-row">
                @if ($recargas != [])
                    <div class="col">
                        {{ $recargas->links() }}
                    </div>
                    <div class="col">
                        Viendo <b> {{ count($recargas) }}</b> de un total de <b>
                            {{ $recargas->total() }}</b>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
