<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $anoAtual = date('Y');
        $anoNasc = $_GET['anoNasc'] ?? 2000;
        $anoCalc = $_GET['anoCalc'] ?? $anoAtual;
        $idade = $anoCalc - $anoNasc;
    ?>
    <header><h1>Calculando a sua idade</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="idAnoNasc" min="1900" max="<?=$anoAtual?>" value="<?=$anoNasc?>">
            <label for="anoCalc">Quer saber a sua idade em que ano? (Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="anoCalc" id="idAnoCalc" min="1900" value="<?=$anoCalc?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoCalc?>!
    </section>
</body>
</html>