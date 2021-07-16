<!DOCTYPE html>
<html>
    <head>
        <title>sesion</title>
    </head>
    <body>
        <?php  
          session_start();  

          if(isset($_SESSION["name"]))  {  

               echo "<h1 align='center'>"."Esta es la Sesion de ".$_SESSION["name"]."</h1>";  
               echo "<p align='center'><a href='salir.php'>salir</a></p>";  

          } else  {  

               header('location:login.php');  
          }  
          ?>
    </body>
</html>