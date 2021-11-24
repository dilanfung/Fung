@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? 'Show Articulo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $articulo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Articulo:</strong>
                            {{ $articulo->categoria_articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $articulo->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $articulo->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $articulo->proveedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
