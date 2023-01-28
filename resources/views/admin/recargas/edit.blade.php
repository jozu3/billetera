@extends('adminlte::page')

@section('title', 'Recargas')

@section('content_header')
    <h1>Modificar recarga</h1>
@stop

@section('content')
    <div class="">
        {!! Form::model($recarga, ['route' => ['admin.recargas.update', $recarga], 'method' => 'put']) !!}
        @include('admin.recargas.partials.form')
        <div class="card">
            <div class="card-header">
                <h3>Actualización</h3>
            </div>
            <div class="card-body">
                <div class="form-row mt-2">
                    <div class="col-md-10">
                        {!! Form::label('motivo_update', 'Motivo de modificación') !!}
                        {!! Form::text('motivo_update', null, ['class' => 'form-control', 'placeholder' => 'Ingrese motivo por el cual está actualizando los datos.']) !!}
                        @error('motivo_update')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-12">
                {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary mb-2']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type=""></script>
@stop
