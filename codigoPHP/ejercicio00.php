<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/ejercicio00.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>Contenido de superglobales y phpinfo</h1>
    </header>
    <?php
    /*
     * @version 2024/11/20
     * @author Victor Garcia Gordon                          
     */
    
    //Funcion que muestra el nombre y el contenido de una variable superglobal en una tabla
    function mostrarSuperglobales($nombre, $global){        
        if (!empty($global)) {                            
            echo('<p>Variable $_' . $nombre . '</p>');
                echo '<table>';
                foreach ($global as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo '</table>';
            }                                                
        else{
            echo('<p>La variable $_'.$nombre.' esta vacia</p>');
        }
    }
    
    
    //Si la variable $_SESSION no esta definida, no se intentara mostrar su contenido
    if (isset($_SESSION)) {
        //Llamada a la funcion que crea la tabla
        mostrarSuperglobal('SESSION', $_SESSION);
    } else {
        echo '<p>La variable $_SESSION no está definida </p>';
    }
    mostrarSuperglobales('COOKIE', $_COOKIE);
    mostrarSuperglobales('SERVER', $_SERVER);
    mostrarSuperglobales('GET', $_GET);
    mostrarSuperglobales('POST', $_POST);
    mostrarSuperglobales('FILES', $_FILES);        
    mostrarSuperglobales('COOKIE', $_ENV);
    
    
    
    

phpinfo();
?>
    <footer>
        <p><a href="../../index.html">Alex Asensio Sanchez</a></p>
        <p><a href="../indexProyectoTema5.php">Tema 5</a></p>
        <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESProyectoTema3/tree/developer">GitHub del repositorio</a></p>
    </footer>
</body>
</html>