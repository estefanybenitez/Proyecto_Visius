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


<link rel="stylesheet" type="text/css" href="../resources/css/menuadmin.css">
<link rel="shortcut icon" href="../imgs/icon.ico">
<title>Visius Menu</title>
</head>



<body class="p-3 m-0 border-0 bd-example">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../imgs/icon.ico" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="#" >Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="#" >Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="#" >Actualizar</a>
            </li>
          </ul>
          <div class="d-flex" role="search">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="#"><i class="bi bi-person-circle"></i> Mi Info</a>
            </li>
            {{-- <li class="nav-item" >
              <a class="nav-link active coloropcion" aria-current="page" href="http://localhost/visius/public/login"><i class="bi bi-arrow-right-square"></i> Salir</a>
            </li> --}}
          </ul>
        </div>
      </div>
      </div>
    </nav>
    
  <!--  
  <body class="p-3 m-0 border-0 bd-example">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#"><img src="../imgs/iconempleados.ico" class="logo"></a>
            </div>
            <ul class="nav navbar-nav" style="font-family: century gothic">
                <li class="coloropcion"><a href="#">Mis Tareas</a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right" style="font-family: century gothic;">
            <li class="coloropcion"><a href="#"><span class="glyphicon glyphicon-user "></span> Mi info</a></li>
            <li class="coloropcion"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
        </ul>
    </div>
    </nav>
-->
    
    <!--carousel-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
            <img src=".../imgs/banner5.png" class="d-block w-100 bd-placeholder-img bd-placeholder-img-lg" width="800px" height="400px" alt="..." role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">

        </div>
        <div class="carousel-item active">
        <img src="../imgs/banner6.png" class="d-block w-100 bd-placeholder-img bd-placeholder-img-lg" width="800px" height="400px" alt="..." role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
    
        </div>
        <div class="carousel-item">
            <img src=".../imgs/banner7.png" class="d-block w-100 bd-placeholder-img bd-placeholder-img-lg" width="800px" height="400px" alt="..." role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
    
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--About section-->
    <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

  </body>









@endsection
