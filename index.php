<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <title>Home | Mi Proyecto</title>      

    <!-- Favicon -->
    <link rel="icon" href="https://nubecolectiva.com/favicon.ico"> 

     <!-- Archivo CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>
  <body> 

    <main>

      <div class="container mb-5">

        <!-- Header -->
        <header class="d-flex flex-wrap py-3 mb-5 border-bottom">

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Mi Proyecto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>                    
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="nosotros.html">Nosotros</a>                    
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="servicios.html">Servicios</a>                    
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contacto.html">Contacto</a> 
                  </li>

                </ul>

                <div class="btn-group btodt" role="group" aria-label="Basic example">                 
                  <button type="button" onclick="window.open('https://nubecolectiva.com/donaciones','_blank')" class="btn btn-warning">Donar</button>                 
                  <button type="button" onclick="window.open('https://blog.nubecolectiva.com/mostrar-un-mensaje-en-una-determinada-fecha-con-javascript/','_blank')" class="btn btn-info">Tutorial</button>
                </div>
                
              </div>
            </div>
          </nav>

        </header>     
        
        <!-- Planes --> 
        <div class="row">

          <div class="col-md-12 mt-5 mb-5">    
            
            <?php 

              function verNavegador() {
                $agente = $_SERVER['HTTP_USER_AGENT'];
                $navegador = "N/A";

                $navegadores = [
                  '/firefox/i' => 'Firefox',
                  '/safari/i' => 'Safari',
                  '/chrome/i' => 'Chrome',
                  '/edge/i' => 'Edge',
                  '/opera/i' => 'Opera',
                  '/mobile/i' => 'Navegador Movil',
                ];
                
                foreach($navegadores as $rg => $value){
                  if(preg_match($rg, $agente)){
                    $navegador = $value;
                  }
                }

                return $navegador;

              }

              echo "Navegador: " . verNavegador();

            ?>
            
          </div>
                    
        </div>

      </div>

    </main>

    <!-- Footer -->  
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Mi Proyecto © <script>document.write(new Date().getFullYear())</script> </span>
      </div>
    </footer>

     <!-- Archivo JS Bootstrap 5 -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 

      
  </body>
</html>
