<html>
    <head>
       <title>Register Form</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width">
       <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class="datos">
            <h1>Datos del formulario</h1>
            <p>
                <?php
                  echo "nombre:" . " " . $_POST["name"] ."<br>";
                  echo "contraseña:" . " " . $_POST["password"] ."<br>";
                  echo "correo:" . " " .  $_POST["email"] ."<br>";
                  echo "año de nacimiento:" . " " . $_POST["dateofbirth"] ."<br>";
                  echo "telefono:" . " " . $_POST["tel"] ."<br>"; 
                  echo "tienda:" . " " . $_POST["shop"] ."<br>"; 
                  echo "edad:" . " " . $_POST["age"] ."<br>"; 
                  echo "subscripción:" . " " . $_POST ["subscription"] . "<br>";
                ?>
            </p>
        </div>
    </body>
</html> 



