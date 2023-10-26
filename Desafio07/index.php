<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $salarioMin = 1380.60;
        $salario = $_GET['salario'] ?? $salarioMin;
        $qtSalarioMin = intdiv($salario, $salarioMin);
        $restoSalario = $salario % $salarioMin;
    ?>
    <header><h1>Informe seu salário</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="idSalario" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salarioMin, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            echo "<p>Quem recebe um salário de <strong>".number_format($salario, 2, ",", ".")."</strong> ganha <strong>$qtSalarioMin salários mínimos + ".number_format($restoSalario, 2, ",", ".").".</strong></p>";
        ?>
    </section>
</body>
</html>