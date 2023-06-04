
@extends('Admi.InicioAdmi')

{{-- Definimos el titulo --}}
@section('title', 'Roles')

{{-- Definimos el contenido --}}
@section('tabla')
    {{-- <h1 class="text-center">Empleados</h1> --}}
    <h5 class="text-center p-2 ">Roles
    <hr>
    {{-- Boton para ir al formulario de agregar producto --}}
    <br>
    <a class="btn btn-success btn-sm" href="/products/create">Agregar nuevo producto</a>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table users table-hover">
    {{-- <table class="container table table-hover table-bordered mt-2"> --}}
        {{-- Encabezados --}}
                    {{-- <tr class="table-dark"> --}}
                    <tr>
                        <td>C&oacute;digo</td>
                        <td>Nombre Rol</td>    
                        <td>Acciones</td>
                    </tr>

                    {{-- Listado de productos --}}
                    @foreach ($roles as $item)
                    <tr>
                        <td>{{$item->id_rol}}</td>
                        <td>{{$item->nombre_rol}}</td>
                    
                        <td>
                        {{-- boton para modificar --}}
                        <a class="btn btn-primary btn-sm" href="/products/edit/{{$item->id_rol}}">Modificar</a>
                        {{-- boton para eliminar --}}
                        <button class="btn btn-danger btn-sm" url="/products/destroy/{{$item->id_rol}}" onclick="destroy(tdis)" token="{{csrf_token()}}">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div> 
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- SweetAlert
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/product.js')}}"></script>
@endsection
