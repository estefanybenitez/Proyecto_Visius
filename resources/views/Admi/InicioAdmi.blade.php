@extends('layouts.app')

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

    <h3> Navbar de Prueba</h3>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">

            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudEmpleado/show" > Gestionar Empleados</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudUsuario/show" >Gestionar Usuarios</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudRoles/show" >Tabla Roles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudArea/show" >Tabla Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudTareas/show" >Tabla Tareas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="/CrudEstadoT/show" >Estado Tareas</a>
            </li>

          </ul>
          <div class="d-flex" role="search">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="http://127.0.0.1:8000/mi_info_admin"><i class="bi bi-person-circle"></i> Mi Info</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link active coloropcion" aria-current="page" href="#"><i class="bi bi-arrow-right-square"></i> Salir</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    
    @yield('tabla')
   
    

      <!--Footer-->
      <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Visius Inc. 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacidad</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Términos</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>
        

  </body>
</html>
@yield('script')

@endsection