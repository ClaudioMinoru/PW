<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo "<h1>Adição</h1>";
                function soma($valor1, $valor2){
                    $resultado  = $valor1 + $valor2;
                    return $resultado;
                }
                $valor = soma(500, 600);
                echo $valor;
            echo "<hr>";

            echo "<h1>Subtração</h1>";
                function subtracao($valor1, $valor2){
                    $resultado  = $valor1 - $valor2;
                    return $resultado;
                }
                $valor = subtracao(800, 750);
                echo $valor;
            echo "<hr>";

            echo "<h1>Multiplicação</h1>";
                function multiplicacao($valor1, $valor2){
                    $resultado  = $valor1 * $valor2;
                    return $resultado;
                }
                $valor =  multiplicacao(65, 100);
                echo $valor;
            echo "<hr>"; 

            echo "<h1>Divisão</h1>";
                function divisao($valor1, $valor2){
                    $resultado  = $valor1 / $valor2;
                    return $resultado;
                }
                $valor =  divisao(10000, 5);
                echo $valor;
            echo "<hr>";
        ?>    
    </body>
</html>