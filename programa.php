<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //aqui se recupera el nombre y apellido que el usuario enviara en el formulario metodo POST
    echo "bienvenido ". $_POST["nom"] ." " . $_POST["ape"]
    //aqui se recupera el nombre y apellido que el usuario envia pero se debe tener en cuenta que se usan datos poco sensibles metodo GET. 
    echo "bienvenido ". $_GET["nom"] ." " . $_GET["ape"]
   ?>
</body>
</html>