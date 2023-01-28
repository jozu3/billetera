@extends('adminlte::page')

@section('title', 'Recargas')

@section('content_header')
    <h1>Registrar recarga</h1>
@stop

@section('content')
{{-- <div>
    @if ($errors->any())
    <div class="relative loginin mb-8">
        <div class="bg-red-600 p-3 w-full rounded-md">
            <div>
                <div class="font-medium text-white">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="mt-3 list-disc list-inside text-sm text-white">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
</div> --}}
    <div class="">

        {!! Form::open(['route' => 'admin.recargas.store']) !!}
        @include('admin.recargas.partials.form')

        <div class="form-row mt-2">
            <div class="col-md-12">
                {!! Form::submit('Guardar recargas', ['class' => 'btn btn-primary mb-2']) !!}

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
