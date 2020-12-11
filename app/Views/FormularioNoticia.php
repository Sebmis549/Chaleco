<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>FORMULARIO DE REGISTRO</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>/Chaleco/static/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>/Chaleco/static/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>/Chaleco/static/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>/Chaleco/static/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>/Chaleco/static/css/formNoticia.css" rel="stylesheet" media="all">

   
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">FORMULARIO DE NOTICIA</h2>
                    <form method="POST" action="<?php echo base_url();?>/index.php/Noticias/validacionNoticias" role= "form" enctype="multipart/form-data"  onsubmit="return validar2();">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Titulo</label>
                                    <input class="input--style-4" type="text" name="titulo" id="titulo">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Imágen</label>
                                    <input class="input--style-5" type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">Contenido</label>    
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        <textarea class="input--style-6" type="text" rows="25" cols="65" name="contenido" id="contenido"></textarea>
                       
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>/Chaleco/static/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>/Chaleco/static/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>/Chaleco/static/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>/Chaleco/static/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>/Chaleco/static/js/global.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Chaleco/static/js/main2.js"></script>
 


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->