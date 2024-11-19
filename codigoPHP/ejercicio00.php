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
        <h1>Array de sueldo</h1>
    </header>
    <?php
    /*
     * @version 2024/11/19
     * @author Alex Asensio Sanchez                          
     */
    
    //Array que contiene las variables globales
    $aGlobales=[$_SERVER, $_GET, $_POST, $_FILES, $_COOKIE];
    
    //Bucle que recorre el array de variables globales y muestra una tabla con los contenidos
    for($i=0; $i<=count($aGlobales); $i++){
        if (!empty($aGlobales[$i])) {
            echo '<table>';
            foreach ($aGlobales[$i] as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo '</table>';
        }
    }
    
    phpinfo();
?>
    <footer>
        <p><a href="../../index.html">Alex Asensio Sanchez</a></p>
        <p><a href="../indexProyectoTema5.php">Tema 5</a></p>
        <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESProyectoTema3/tree/developer">GitHub del repositorio</a></p>
    </footer>
</body>
</html>