
@extends('home')

{{-- Definimos el titulo --}}
@section('title', 'Empleados')

{{-- Definimos el contenido --}}
@section('content2')
    {{-- <h1 class="text-center">Empleados</h1> --}}
    <h5 class="text-center p-2 ">Listado de Empleados</h5>
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
            <td>C&oacute;ID Empleado</td>
            <td>Nombre</td>    
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Fecha de Nacimiento</td>          
            <td>Fecha de Ingreso</td>      
            <td>Dirección</td>      
            <td>Area</td>
            <td>id rol</td>
            <td>id area</td>
        </tr>

        {{-- Listado de productos --}}
        {{-- @foreach ($empleados as $item)
        <tr>
            <td>{{$item->id_empleados}}</td>
            <td>{{$item->nombre_empleado}}</td>
            <td>{{$item->correo}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->fecha_nacimiento}}</td>
            <td>{{$item->fecha_ingreso}}</td>
            <td>{{$item->direccion}}</td>
            <td>{{$item->id_rol}}</td>
            <td>{{$item->id_area}}</td>
            <td> --}}
            {{-- boton para modificar
            <a class="btn btn-primary btn-sm" href="/products/edit/{{$item->id_empleados}}">Modificar</a> --}}
            {{-- boton para eliminar --}}
            {{-- <button class="btn btn-danger btn-sm" url="/products/destroy/{{$item->id_empleados}}" onclick="destroy(tdis)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach --}}
    {{-- </table> --}}
</table>
</div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/product.js')}}"></script>
@endsection
