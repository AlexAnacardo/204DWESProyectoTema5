<?php
    /*
     * @version 2024/11/20
     * @author Alex Asensio Sanchez                          
     */
    
    require_once('../config/confDBPDO.php');
    
    
    
    //Si el usuario no ha introducodo sus credenciales, o si las ha introducido de manera incorrecta, se ejecutara el codigo dentro del if
    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){        
        header('WWW-Authenticate: Basic realm="Test Authentication System"');        
        //Si se da a cancelar, se ejecutara el siguiente codigo
        header('HTTP/1.0 401 Unauthorized');
        echo "<p>Autentificacion cancelada</p>";
        echo "<a href='../indexProyectoTema5.php'><button>Volver</button></a>";          
        exit;
    }
    else{                         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/ejercicio00.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Validar usuario con header()</h1>
    </header>
    <main>
        <?php
        $miDB=new PDO(CONEXION, USUARIO, CONTRASEÑA);
    
        $sql= $miDB->prepare("select T01_Password from T01_Usuario where T01_CodUsuario= ? ");
        $sql-> execute([$_SERVER['PHP_AUTH_USER']]);
        $contraseña=$sql->fetchObject();
            if(hash('sha256', $_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW'])==$contraseña->T01_Password){
        ?>
        <p>Bienvenido <?php echo($_SERVER['PHP_AUTH_USER']) ?></p>
        <?php
            }
            else{
        ?>
        <p>Usuario o contraseña erroneos</p>
        <?php
            }
        ?>
    </main>  
    <footer>
        <p><a href="../../index.html">Alex Asensio Sanchez</a></p>
        <p><a href="../indexProyectoTema5.php">Tema 5</a></p>
        <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESProyectoTema3/tree/developer">GitHub del repositorio</a></p>
    </footer>
</body>
</html>
<?php
}
?>