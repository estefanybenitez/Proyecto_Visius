<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../resources/css/login.css">
    <link rel="shortcut icon" href="../imgs/icon.ico">
    <title>Visius Login</title>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <section class="h-100 gradient-form fondo" style="background-color: black;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <h4 class="mt-1 mb-5 pb-1">LOG IN</h4>
                  </div>
                  <form>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Usuario</label>
                      <input type="user" id="usuario" class="form-control" placeholder="usuario123" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="contrasenia">Contraseña</label>
                      <input type="password" id="form2Example22" class="form-control" />
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button" onclick="location.href='http://localhost/visius/public/visius_empleados'">Ingresar</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="px-3 py-4 p-md-5 mx-md-4">
                  <img src="../imgs/logo3.PNG" class="logo"> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </body>
</html>