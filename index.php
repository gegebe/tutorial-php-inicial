<!DOCTYPE html>
<html lang="es">
 <head>
  <title>Tutorial PHP</title>
  <meta charset="utf-8">
 </head>
 <body>
 <?php 

echo "<h1>Aprendiendo PHP</h1>";
 //Variables
    $color = "verde";
    $vnum1 = 2;
    $vnum2 = 4;


echo "<h2>Encadenar variables y texto</h2>";
    echo "<p>El mundo es " . $color . "</p>";
    echo phpversion();
 ////////
 // COMENTARIOS
 ////////
    //Comentario de una línea
    # Comentario de una línea
    /* Comentario
    multilínea */
echo "<h2>Operaciones con variables</h2>";
    $suma = $vnum1 + $vnum2;
    echo "<p>". $suma ."</p>";

echo "<h2>Alcance de las variables</h2>";
////////
// ALCANCE DE LAS VARIABLES
////////

echo "<h3>Variables de alcance global</h3>";
# Variables de alcance global

    $valor = 10;

    function scopeVariables(){
        global $valor;//Necesario para acceder a la variable global
        echo "<p>El valor de la variable dentro de la función es: ". $valor ."</p>";
    }

    scopeVariables();

    echo "<p>El valor de la variable fuera de la función es: ". $valor ."</p>";

echo "<h3>Variables de alcance local</h3>";
# Variables de alcance local

    function scopeVariablesLocal(){
        $valor = 5;
        echo "<p>El valor de la variable dentro de la función es: ". $valor ."</p>";
    }
    scopeVariablesLocal();

echo "<h2>Uso de static</h2>";
#No borrar valor de las variables tras ejecución de la función

    function scopeVariablesStatic(){
        static $valor = 0;
        $valor++;
        echo "<p>El valor de la variable es: ". $valor ."</p>";
    }

    scopeVariablesStatic();
    scopeVariablesStatic();
    scopeVariablesStatic();


 ?>
 </body>
</html>