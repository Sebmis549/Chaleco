<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: solid 3px; black">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Contraseña</th>
        </tr>

        <?php
            foreach ($usuarios as $key){
                echo '<tr>';
                echo '<td>' .$key['nombre'];
                echo '<td>' .$key['apellido'];
                echo '<td>' .$key['correo'];
                echo '<td>' .$key['telefono'];
                echo '<td>' .$key['contrasena'];
                echo '</tr>';
            }
        ?>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    </table>
</body>
</html>