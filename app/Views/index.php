<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Login</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Chaleco/static/css/index.css" th:href="@{/css/index.css}">


</head>
<body>

    <! -- aqui termina el header -->

 <! -- aqui termina inicia el nav-bar-->
  <nav class="botones text-center">
    <button type="submit" class="btn btn-secondary" id="btn1"  onClick="window.location = '<?php echo base_url();?>/index.php/Noticias/indexAdmin';">Administrador</button>
    <button type="submit" class="btn btn-secondary" id="btn2" onClick="window.location = '<?php echo base_url();?>/index.php/Noticias/index';">Usuario</button>
 </nav>

<! -- aqui inicia seccion principal-->
<section class="row">

        <div class="main-dialog text-center col-lg-10 col-sm-12">
        <div class="col-sm-8 main-section ">
            <div class="modal-content ">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>/Chaleco/static/img/user.png"   width="100"/>
                </div>
                <form class="col-12" action="<?php echo base_url();?>/index.php/Noticias/Principal" role= "form"  onsubmit="return validar();">
                    <div class="form-group"/>
                        <input type="text" class="form-control" placeholder="Correo electronico" name="emai"   id="email"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" id="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary" ><i class="fas fa-sign-in-alt"></i>  Ingresar </button>

                </form>
                <! -- boton registrerse -->
                <form role= "form" action="<?php echo base_url();?>/index.php/Noticias/FormularioPersona">
                	<button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
             
            </div>
        </div>
    </div>
     <! -- aqui inicia redes sociales-->

    <div class="red">
        <a href="#" target="_blank">
            <div class="item red-facebook">
                <i class="fab fa-facebook-f fa-fw" style="color: white"></i>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="item red-twitter">
                <i class="fab fa-twitter fa-fw" style="color: white"></i>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="item red-instagram ">
                <i class="fab fa-instagram fa-fw" style="color: white"></i>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="item red-youtube">
                <i class="fab fa-youtube fa-fw" style="color: white"></i>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="item red-pinterest ">
                <i class="fab fa-pinterest fa-fw" style="color: white"></i>
            </div>
        </a>

        <a href="#" target="_blank">
            <div class="item red-email">
                <i class="far fa-envelope fa-fw" style="color: white"></i>
            </div>
        </a>
    </div>
</section>


    <!-- Main JS-->
    <script src="<?php echo base_url();?>/Chaleco/static/js/global.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Chaleco/static/js/main.js"></script>

</body>
</html>
