<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacto - NETWORK | Soluciones móviles para empresas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Cargando fuentes-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i" rel="stylesheet">

    <!--Cargando íconos-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--Carga de archivos css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

  </head>
  <body class="paginas-internas">
    <section class="bienvenidos">
        <header class="encabezado navbar-fixed-top" rol="banner">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio">
                </a>
                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <!--formulario buscar-->
                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>
                <!--fin formulario-->
                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li class="active"><a href="contacto.php">Contacto</a></li>
                </nav>
            </div>
        </header>
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Contacto</h1>
                <p>Estamos listos para ayudarte.</p>
                
            </div>
        </div>
        
    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Contacto
                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="m-b-2">Formulario de contacto</h2>
                    <form action="#">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                            <div class="col-md-8">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>
                            <div class="col-md-8">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>
                            <div class="col-md-8">
                                <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn btn-secondary" type="reset">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>Detalle del contacto</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, esse! Amet at molestias ratione ad, dolores eum, perferendis consectetur. Dolor ipsam minus accusamus, iure dolorum reprehenderit dignissimos illum quam vero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse nihil asperiores rerum blanditiis corrupti temporibus optio, cumque sint praesentium, dicta excepturi! Quisquam deleniti delectus quasi dolorem, ex ipsa sapiente!</p>
                </div>
                
            </div>
        </div>
    </main>
    <footer class="piedepagina p-y-1 text-xs-center" role="contentinfo">
        <div class="container">
            <p>2016 &copy; NETWORK Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>
    <a href="#" class="ir-arriba">
        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
    </a>
    <!--Carga de archivos js-->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
   </body>
</html>