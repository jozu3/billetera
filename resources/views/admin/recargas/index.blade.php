@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <a href="{{ route('admin.recargas.create') }}" class="btn btn-sm btn-success text-white float-right">
        <i class="fas fa-plus-circle"></i> Nueva recarga
    </a>
    <h1>Lista de Recargas</h1>
@stop

@section('content')
    @livewire('admin.recargas-index')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="{{config('app.url')}}/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop