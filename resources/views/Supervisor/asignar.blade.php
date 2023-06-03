<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--carousel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

   

    <link rel="stylesheet" type="text/css" href="../resources/css/menusup.css">
    <script src="../resources/js/empleadosup.js"></script>

    <link rel="shortcut icon" href="../imgs/logosup.ico">

    <title>Visius - Asignar Tareas</title>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
     
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/visius/public/visius_supervisores"><img src="../imgs/logosup.ico" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="http://localhost/visius/public/visius_ver_empleados" >Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="http://localhost/visius/public/visius_asignar_tareas" >Asignar Tareas</a>
            </li>
          </ul>
          <div class="d-flex" role="search">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
            <li class="nav-item">
              <a class="nav-link active coloropcion" aria-current="page" href="http://localhost/visius/public/visius_mi_info_supervisor"><i class="bi bi-person-circle"></i> Mi Info</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link active coloropcion" aria-current="page" href="http://localhost/visius/public/login"><i class="bi bi-arrow-right-square"></i> Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    
    <!--About section-->
    <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Asignación de Tareas <i class="bi bi-person-rolodex"></i></span></h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
    
      <!--Asignar tarea empleado-->
      <div class="container">

      <form>
  <div class="form-group">
    <label for="id">ID empleado</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
</html>