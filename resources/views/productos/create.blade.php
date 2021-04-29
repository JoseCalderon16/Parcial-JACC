
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('productos.store')}}">
                        @csrf
                            @include('productos.formprods')
                            <div class="modal-footer">
                              <a href="{{ route('productos.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
