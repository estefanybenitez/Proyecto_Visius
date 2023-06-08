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
  
    
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Bienvenid@</span></h3>
  @endsection

  @section('contenido1')
<p class="lead fw-light mb-4">User management</p>
@endsection


@section('contenido2')
<p class="text-muted">Actualizacion de informacion, disponible a partir de Mayo 10</p>
@endsection

@section('contenido3')
<p class="text-muted">Hecha un vistazo a nuestras actividades y dinámicas en nuestras redes sociales!!</p>
@endsection

@section('contenido4')
<div class="d-flex justify-content-center fs-2 gap-4">
    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
    <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
    <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
</div>
@endsection
    

      

  </body>
</html>
@yield('script')

