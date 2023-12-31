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


<h2>Ejercicio 5: Usar las variables $edad y $sexo en una instrucción if</h2>
    
<!DOCTYPE html>
<html>
<head>
    <title>Verificación de Edad y Sexo</title>
</head>
<body>
    <form action="verificar.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la edad y el sexo del formulario
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    // Verificar si es femenino y tiene entre 18 y 35 años
    if ($sexo == "femenino" && $edad >= 18 && $edad <= 35) {
        echo "Bienvenida, usted está en el rango de edad permitido.";
    } else {
        echo "Lo siento, no cumple con los requisitos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>





<h2>Ejercicio 6</h2>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div>
        <form method="POST" action="auto.php" style="font-family: Arial, Helvetica, sans-serif;">
            
            <h4>Consulta</h4>
            MATRICULA  <select name="matricula">
                <option>ALL</option>
                <option>UBN6568</option>
                <option>UCN6339</option>
                <option>MNC6338</option>
                <option>JKN6538</option>
                <option>UTT6399</option>
                <option>LIO1204</option>
                <option>UBP6377</option>
                <option>UYH8338</option>
                <option>TRH5647</option>
                <option>UBN9888</option>
                <option>HDK8838</option>
                <option>UPO9988</option>
                <option>CHT5638</option>
                <option>UTL3387</option>
                <option>CBO8338</option>
            </select>

            <br><br>
            <input type="submit" value="INGRESAR">
            <br><br>
        </form>
    </div>



    <body>
    <div>
      
        <pre>
            <?php
            $autos = array('UBN6338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Andres',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Balcones del Sur'
                )
            ), 'UBN6339' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Estrella',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Balcones del Sur'
                )
            ), 'HTC6338' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2011",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Pablo',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Volcanes'
                )
            ), 'UHN6538' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2009",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Armando',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Angelopolis'
                )
            ), 'UTT6399' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2001",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Sandra',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Valles'
                )
            ), 'YUT1234' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2013",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Fabian',
                    'ciudad' => 'Hidalgo',
                    'direccion' => 'Col. Bella Vista'
                )
            ), 'UBP6377' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Jorge',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Maravillas'
                )
            ), 'UYH8338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2006",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Andrea',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Palmera'
                )
            ), 'TRH5647' => array(
                'auto' => array(
                    'marca' => "Crevrolet",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Alonso',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Chico'
                )
            ), 'UBN8888' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2014",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Roberto',
                    'ciudad' => 'Aguascalientes',
                    'direccion' => 'Col. Del Rio'
                )
            ), 'HDR7838' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2021",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Jasmine',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Playa'
                )
            ), 'UPO9988' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2015",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Xochitl',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Loma'
                )
            ), 'CHT5638' => array(
                'auto' => array(
                    'marca' => "Chevrolet",
                    'modelo' => "2019",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Maria',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Cerrito'
                )
            ), 'UTL3387' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2012",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Miguel Angel',
                    'ciudad' => 'Oaxaca',
                    'direccion' => 'Col. Ranchito Alto'
                )
            ), 'UBO8338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Charlotte',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Rio'
                )
            ));

            $m = $_POST["matricula"];

            if ($m == "ALL") {
                print_r($autos);
            } else {

                echo $m.'<br>';
                print_r($autos[$m]);
            }

            ?>
        </pre>
    </div>
</body>

</html>








</body>
</html>

























</body>
</html>