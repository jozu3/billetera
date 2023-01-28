<div class="card">
    <div class="card-header">
        <h3>Jugador</h3>
    </div>
    <div class="card-body">
        <div class="form-row mt-2">
            <div class="col-md-10">
                {!! Form::label('jugadore_id', 'ID del Jugador') !!}
                {!! Form::text('jugadore_id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el id del jugador']) !!}
                @error('jugadore_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Recarga</h3>
    </div>
    <div class="card-body">
        <div class="form-row mt-2">
            <div class="col-md-10">
                {!! Form::label('cuenta_id', 'Tipo de cuenta') !!}
                {!! Form::select('cuenta_id', $cuentas, null, [
                    'class' => 'form-control',
                    'placeholder' => '[-- Seleccione --]',
                ]) !!}
                @error('cuenta_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-10">
                {!! Form::label('monto', 'Monto') !!}
                {!! Form::number('monto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el monto recargado']) !!}
                @error('monto')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-6">
                {!! Form::label('numoperacion', 'Num. Operación') !!}
                {!! Form::text('numoperacion', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el número de operación',
                ]) !!}
                @error('numoperacion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-6">
                {!! Form::label('fecha', 'Fecha de recarga') !!}
                {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha recargado']) !!}
                @error('fecha')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Atención</h3>
    </div>
    <div class="card-body">
        <div class="form-row mt-2">
            <div class="col-md-6">
                {!! Form::label('fecha_atencion', 'Fecha de atención') !!}
                {!! Form::date('fecha_atencion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de atención']) !!}
                @error('fecha_atencion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-10">
                {!! Form::label('medio_id', 'Medio de atención') !!}
                {!! Form::select('medio_id', $medios, null, ['class' => 'form-control', 'placeholder' => '[-- Seleccione --]']) !!}
                @error('medio_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</div>
