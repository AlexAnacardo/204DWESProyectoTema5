<?php
    /*
     * @version 2024/11/20
     * @author Alex Asensio Sanchez                          
     */
    
    //Si el usuario no ha introducodo sus credenciales, o si las ha introducido de manera incorrecta, se ejecutara el codigo dentro del if
    if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER']!='administrador' && $_SERVER['PHP_AUTH_PW']!='1234' ){
        //Se ejecuta la ventana de autentificacion, si los datos introducidos son correctos se saldra del if y se mostrara el mensaje de bienvenida
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
        <p>Bienvenido <?php echo($_SERVER['PHP_AUTH_USER']) ?></p>
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