@extends('layouts.app')
<!--Main Menu Admin-->

@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />


<link rel="stylesheet" type="text/css" href="./css/menuadmin.css">
<link rel="shortcut icon" href="./imgs/icon.ico">
    <title>Visius</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  </head>
  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Usuarios <i class="bi bi-layout-text-sidebar-reverse"></i> </span></h3>
  <br>
@endsection


@section('contenido2')
<table class="container table table-hover table-bordered mt-2">
        {{-- Encabezados --}}
        <tr class="table-dark">
            <td>User ID</td>
            <td>Nombre</td>
            <td>Rol</td>
            <td>E-mail</td>
            <td>Acciones</td>
        </tr>

        {{-- Listado de usuarios --}}
        @foreach ($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->role}}</td>
            <td>{{$item->email}}</td>
            <td>
                @if(Auth::user()->role == "Administrador")
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/users/edit/{{$item->id}}">Modificar</a>
                @endif
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/users/destroy/{{$item->id}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

  </body>
</html>
@yield('script')

