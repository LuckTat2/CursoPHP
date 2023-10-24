<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador de Valores</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        //Capturando os dados de Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">  <!--Foi passado o caminho para o próprio arquivo e foi abreviado a tag php e o echo -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">  <!--No value do input está definido o caminho para a varíavel $valor1, a tag php e o echo estão abreviados também-->
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print "<p>A soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>