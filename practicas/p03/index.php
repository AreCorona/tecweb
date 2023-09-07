<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';






        echo <h2>Ejericio 2</h2>;
        echo " <p>  Proporcionar los valores de $ a, $ b, $ c como sigue:</p> ";
        $a =  "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
        $a = "PHP server";
        $b = &$a;

        echo "<h3> Ahora muestra el contenido de cada variable </h3>";
        
        echo ($a = "ManejadorSQL"); echo "<br>";
        echo ($b = "MySQL"); echo "<br>";
        echo ($c);
        echo ($a = "PHP Server"); echo "<br>";
        echo ($b); echo "<br>";

        echo "<p>Agrega al código actual las siguientes asignaciones: </p>";
        echo "
        <p>
        $a = “PHP server”; 
        $b = &
        $a;
        </p>";

        echo "<p>Vuelve a mostrar el contenido de cada uno </p>";
        echo ($a = "PHP Server"); echo "<br>";
        echo ($b); echo "<br>";
        echo "<h3>Se agregaron nuevas asignaciones</h3>";


     echo <h2> Ejercicio 3 </h2>;
     echo "<p> Muestra el contenido de cada variable inmediatamente después de cada asignación
    verificar la evolución del tipo de estas variables (imprime todos los componentes de los 
    arreglos): </p>";

 
    
    $a = "PHP5";
    echo 'Valor de $a: '.$a.'<br>';

    $z[] = &$a;
    echo 'Valor de $z: ';
    print_r ($z);
    echo '<br>';

    $b = "5a version de PHP";
    echo 'Valor de $b: '.$b.'<br>';

    @$c = $b*10;
    echo 'Valor de $c: '.$c. '<br>';

    $a .= $b;
    echo 'Valor de $a: '.$a.'<br>';

    $b *= $c;
    echo 'Valor de $b: '.$b.'<br>';

    $z[0] = "MySQL";
    print_r ($z);
    echo '<br>';
    ?>


     echo "<h2> Ejercicio 4 </h2>";
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de <br>
    la matriz $GLOBALS o del modificador global de PHP.</p>
    <?php
    function prueba(){
        global $a, $b, $c, $z;
    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br>';
    echo 'Valor de $z: ';
    print_r ($z);
    }
    
prueba();

   


echo <h2>Ejercicio 5</h2>
    echo "<p>Dar el valor de las variables $a, $b, $c al final del siguiente script: "
    $a = “7 personas”; <br>
    $b = (integer) $a; <br>
    $a = “9E3”; <br>
    $c = (double) $a; <br>  </p>

    
    $a = "7 personas";
    echo 'Valor de $a: '.$a.'<br>';
    $b = (integer) $a;
    echo 'Valor de $b: '.$b.'<br>';
    $a = "9E3";
    echo 'Valor de $a: '.$a.'<br>';
    $c = (double) $a;
    echo 'Valor de $c: '.$c.'<br>';





    <h2>Ejercicio 6</h2>
   echo "<p>
    Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas <br>
    usando la función var_dump(<'datos'>). <br>
    </p>"

    $a = "0";
            $b = "TRUE";
            $c = FALSE;
            $d = ($a OR $b);
            $e = ($a AND $c);
            $f = ($a XOR $b); 
            var_dump($a); echo "<br>";
            var_dump($b); echo "<br>";
            var_dump($c); echo "<br>";
            var_dump($d); echo "<br>";
            var_dump($e); echo "<br>";
            var_dump($f); echo "<br>";


    echo "<br><br>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e <br>
    en uno que se pueda mostrar con un echo: <br> <br>"

    echo var_export($c, true); "<br>";
    echo var_export($e, true); "<br>";








    <h2>Ejercicio 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente: <br>

    a. La versión de Apache y PHP, <br>
    b. El nombre del sistema operativo (servidor), <br>
    c. El idioma del navegador (cliente). <br></p>

    <?php
    echo 'Version de Apache y PHP: ';
    echo $_SERVER['SERVER_SIGNATURE'];
    echo '<br>Nombre del sistema operativo (servidor): ';
    echo $_SERVER['SERVER_NAME'];
    echo '<br>Idioma del navegador (cliente): ';
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>

    
   






    
</body>
</html>