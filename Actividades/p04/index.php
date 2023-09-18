<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="C:\xampp\htdocs\tecweb\Actividades\p04" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>




  <h2>Ejercicio 2:  Secuencia de 3 números aleatorios (impar, par, impar)</h2>
    <?php
    function generarSecuenciaAleatoria() {
        $secuencia = array();
        $iteraciones = 0;
        
        do {
            $numero1 = rand(1, 999);
            $numero2 = rand(1, 999);
            $numero3 = rand(1, 999);
            $secuencia = array($numero1, $numero2, $numero3);
            $iteraciones++;
        } while (!esSecuenciaImparParImpar($secuencia));
        
        return array('secuencia' => $secuencia, 'iteraciones' => $iteraciones);
    }

    function esSecuenciaImparParImpar($secuencia) {
        return ($secuencia[0] % 2 != 0 && $secuencia[1] % 2 == 0 && $secuencia[2] % 2 != 0);
    }

    if (isset($_GET["generar_secuencia"])) {
        $resultado = generarSecuenciaAleatoria();
        $secuenciaGenerada = $resultado['secuencia'];
        $iteraciones = $resultado['iteraciones'];

        echo "<p>Secuencia generada: " . implode(", ", $secuenciaGenerada) . "</p>";
        echo "<p>$iteraciones iteraciones para obtener la secuencia.</p>";
    }
    ?>

    <form method="GET" action="">
        <input type="hidden" name="generar_secuencia" value="1">
        <input type="submit" value="Generar Secuencia">
    </form>



    <h2>Ejercicio 3:  Utiliza un ciclo while</h2>
    <?php
    $numero_dado = 7; 

    while (true) {
        $numero_aleatorio = rand(1, 100); 
        if ($numero_aleatorio % $numero_dado == 0) {
            echo "El primer número aleatorio múltiplo de $numero_dado es: $numero_aleatorio";
            break;
        }
    }
    ?>
  
    <h2>Ejercicio 4:  Crear un arreglo cuyos índices van de 97 a 122</h2>
    <?php
    $arreglo = array();
    for ($codigo = 97; $codigo <= 122; $codigo++) {
        $letra = chr($codigo);
        $arreglo[$codigo] = $letra;
    }
    
    // Crear una tabla en XHTML con echo y un ciclo foreach
    echo '<table border="1">';
    echo '<tr><th>Índice</th><th>Valor</th></tr>';
    foreach ($arreglo as $indice => $valor) {
        echo '<tr>';
        echo '<td>' . $indice . '</td>';
        echo '<td>' . $valor . '</td>';
        echo '</tr>';
    }
    echo '</table>';






?>
</body>
</html>