<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Servicios - NETWORK | Soluciones móviles para empresas</title>
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
                        <li class="active"><a href="servicios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Nosotros</h1>
                <p>¿Quíenes Somos? y ¿Qué Hacemos?.</p>
                
            </div>
        </div>
        
    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Nosotros
                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1 lista-servicios">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                        <h4>Desarrollo de Aplicaciones Móviles</h4>
                        <p>Desarrollamos aplicaciones móviles y plataformas web. Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio1">Más información</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <h4>Consultoría Tecnológica</h4>
                        <p>Ofrecemos consultoría tecnológica especializada en movilidad, necesaria previo al desarrollo de cualquier proyecto.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio2">Más información</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <h4>Marketing y publicidad Móvil</h4>
                        <p>Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en el momento exacto para conseguir un mayor impacto.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio3">Más información</a>
                    </article>
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
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Modal 1-->
    <div class="modal fade" id="servicio1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" >Aplicaciones Móviles</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, laborum magni impedit, qui iste blanditiis hic fugiat nam tempore minima eligendi labore atque saepe optio alias sunt maiores, id architecto.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nostrum quisquam ipsum sint, error quibusdam libero nam, excepturi dolorem. Voluptatibus fugiat numquam cumque rerum dicta cupiditate molestiae, ipsa explicabo et.
                </div>
                <div class="col-md-4">
                    <img src="images/servicio-1.svg" alt="" width="200" class="img-fluid m-x-auto">
                </div>
            </div>
        </div>
        
        </div>
    </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade" id="servicio2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" >Consultoría Tecnológica</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, laborum magni impedit, qui iste blanditiis hic fugiat nam tempore minima eligendi labore atque saepe optio alias sunt maiores, id architecto.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nostrum quisquam ipsum sint, error quibusdam libero nam, excepturi dolorem. Voluptatibus fugiat numquam cumque rerum dicta cupiditate molestiae, ipsa explicabo et.
                </div>
                <div class="col-md-4">
                    <img src="images/servicio-2.svg" alt="" width="200" class="img-fluid m-x-auto">
                </div>
            </div>
        </div>
        
        </div>
    </div>
    </div>
    <!-- Modal 3-->
    <div class="modal fade" id="servicio3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" >Marketing y publicidad Móvil</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, laborum magni impedit, qui iste blanditiis hic fugiat nam tempore minima eligendi labore atque saepe optio alias sunt maiores, id architecto.
                    
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nostrum quisquam ipsum sint, error quibusdam libero nam, excepturi dolorem. Voluptatibus fugiat numquam cumque rerum dicta cupiditate molestiae, ipsa explicabo et.
                </div>
                <div class="col-md-4">
                    <img src="images/servicio-3.svg" alt="" width="200" class="img-fluid m-x-auto">
                </div>
            </div>
        </div>
        
        </div>
    </div>
    </div>

  </body>
</html>