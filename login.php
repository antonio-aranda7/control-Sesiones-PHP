<?php  
    session_start();  

    if(isset($_POST["sub"]))  {  

        $_SESSION["name"] = 'antonio';
        //$parametro3 = $_POST['parametro3'];
        //$_SESSION= $_POST['name'];

        header("location:index.php"); 
    }
 ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Sesiones</title>
    </head>

    <body>
        <div style="text-align: center;">
            <h3>Login</h2>
            <form method="post">
                <div >
                    <div>
                        <p>usuario</p>
                        <input type="text" name="name" id="name" value="antonio"/>
                    </div>
                    <div>
                        <p>contraseña</p>
                        <input type="password" name="pass" id="pass"/>
                    </div>
                    <div>
                        <br>
                        <input type="submit" name="sub"/>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>