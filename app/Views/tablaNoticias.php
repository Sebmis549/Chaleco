<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Registro Noticias</title>
</head>
<body>
    <br>
    <br>
    <br>
    <table id="noticias" style="border: solid 3px; black">
        <tr>
            <th>Titulo</th>
            <th>Contenido</th>
        </tr>

        <?php
            foreach ($noticias as $key){
                echo '<tr>';
                echo '<td>' .$key['titulo'];
                echo '<td>' .$key['contenido'];
                echo '</tr>';
            }
        ?>
    </table>

    <form method="POST" action="<?php echo base_url();?>/index.php/Noticias/PrincipalAdmin">
                        
        <button class="btn btn--radius-2 btn--blue" type="submit">Regresar</button>
                        
    </form>
                        

</body>
</html>