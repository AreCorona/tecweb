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






        echo "<h2>Ejericio 2</h2>";
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


     echo "<h2>Ejercicio 3</h2>";
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, <br>
    verificar la evolución del tipo de estas variables (imprime todos los componentes de los <br>
    arreglo): <br></p>

    <?php
    
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






    ?>
</body>
</html>