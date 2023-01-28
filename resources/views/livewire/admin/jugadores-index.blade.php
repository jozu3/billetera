<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese jugador">
            {{-- - {{$search}} --}}
            
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Saldo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jugadores as $jugadore)
                        <tr>
                            <td>{{ $jugadore->id }}</td>
                            <td>{{ $jugadore->name }}</td>
                            <td>S/ {{ number_format($jugadore->saldo, 2, ',', ' ') }}</td>
                            <td width="10px">
                                <button class="btn btn-link">
                                    <a href="{{ route('admin.jugadores.show', $jugadore) }}">
                                        <i class="far fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="form-row">
                @if ($jugadores != [])
                    <div class="col">
                        {{ $jugadores->links() }}
                    </div>
                    <div class="col">
                        Viendo <b> {{ count($jugadores) }}</b> de un total de <b>
                            {{ $jugadores->total() }}</b>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
