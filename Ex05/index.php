<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos em PHP</h1>
        <?php 
            //Número hexadecimal começa com 0x em php
            $valor1 = 0x1A;
            //Número binário em php começa com 0b
            $valor2 = 0b1011;
            //Número octal começa com 0
            $valor3 = 010;
            echo "O $valor1 é hexadecimal, o $valor2 é binário e o $valor3 é octal </p>";

            //Posso forçar o tipo do número usando (int), naturalmente o valor seria float para o número específicado abaixo
            $n = (int) 3e2; //3x10^2 = 300
            var_dump($n);


            $num = 300;
            var_dump($num); //Retorna o valor e o seu tipo
        ?>
</body>
</html>