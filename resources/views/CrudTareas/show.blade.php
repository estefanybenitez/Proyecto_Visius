
@extends('Admi.InicioAdmi')

{{-- Definimos el titulo --}}
@section('title', 'Roles')

{{-- Definimos el contenido --}}
@section('tabla')
    {{-- <h1 class="text-center">Empleados</h1> --}}
    <h5 class="text-center p-2 ">Tareas
    <hr>
    {{-- Boton para ir al formulario de agregar producto --}}
    <br>
    <a class="btn btn-success btn-sm" href="/products/create">Tareas</a>
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
                        <td>Nombre Tarea</td>    
                        <td>Descripcion</td>    
                        <td>Acciones</td>
                    </tr>

                    {{-- Listado de productos --}}
                    @foreach ($tareas as $item)
                    <tr>
                        <td>{{$item->id_tarea}}</td>
                        <td>{{$item->nombre_tarea}}</td>
                        <td>{{$item->descripcion}}</td>
                    
                        <td>
                        {{-- boton para modificar --}}
                        <a class="btn btn-primary btn-sm" href="/products/edit/{{$item->id_tarea}}">Modificar</a>
                        {{-- boton para eliminar --}}
                        <button class="btn btn-danger btn-sm" url="/products/destroy/{{$item->id_tarea}}" onclick="destroy(tdis)" token="{{csrf_token()}}">Eliminar</button>
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
