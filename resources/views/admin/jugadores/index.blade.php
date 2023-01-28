@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <h1>Lista de jugadores</h1>
@stop

@section('content')
    @livewire('admin.jugadores-index')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="{{config('app.url')}}/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop