<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['pesoV1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['pesoV2'] ?? 1;
        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>
    <header><h1>Médias Aritméticas</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1º Valor</label>
        <input type="number" name="v1" id="idV1" value="<?=$valor1?>">
        <label for="pesoV1">1º Peso</label>
        <input type="number" name="pesoV1" id="idPesoV1" value="<?=$peso1?>">
        <label for="v2">2º Valor</label>
        <input type="number" name="v2" id="idV2" value="<?=$valor2?>">
        <label for="pesoV2">2º Peso</label>
        <input type="number" name="pesoV2" id="idPesoV2" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
    </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "<p>Analisando os valores <strong>$valor1</strong> e <strong>$valor2</strong>, temos:";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> é igual a <strong>".number_format($mediaSimples,2,",",".")."</strong><br>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> é igual a <strong>".number_format($mediaPonderada,2,",",".")."</strong></li></ul>";
        ?>
    </section>
</body>
</html>