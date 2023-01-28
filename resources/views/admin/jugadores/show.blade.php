@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <h1>Lista de jugadores</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ $jugadore->name }}</h2>
    </div>
    <div class="card-body">
        <h3>
            Saldo:
            <b>    
                S/ {{ number_format($jugadore->saldo, 2, ',', ' ') }}
            </b>
        </h3>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Recargas</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cuenta</th>
                    <th>Num. Operación</th>
                    <th>Monto</th>
                    <th>Fecha de recarga</th>
                    <th>Fecha de atención</th>
                    <th>Medio de atención</th>
                    <th>Recargado por:</th>
                    <th>Modificado por:</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jugadore->recargas as $recarga)
                    <tr>
                        <td>{{ $recarga->id }}</td>
                        <td>{{ $recarga->cuenta->name }}</td>
                        <td>{{ $recarga->numoperacion }}</td>
                        <td class="text-success">
                            <i class="fas fa-arrow-alt-circle-up text-success"></i>
                            S/ {{ number_format($recarga->monto, 2, ',', ' ') }}
                        </td>
                        <td>{{ date( 'd/m/Y', strtotime($recarga->fecha)) }}</td>
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
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="{{config('app.url')}}/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
