<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $tempo = $_GET['tempo'] ?? 0;
        ?>
    <header><h1>Calculadora de Tempo</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total em segundos?</label>
            <input type="number" name="tempo" id="idTempo" min="0" step="1" value="<?=$tempo?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $tempo; 
        //Total semanas
        $semana = (int)($sobra/604800);
        $sobra = $sobra % 604800;
        //Total dias 
        $dia = (int)($sobra/84400);
        $sobra = $sobra % 84400;
        //Total horas
        $hora = (int)($sobra/3600);
        $sobra = $sobra % 3600;
        //Total minutos
        $minuto = (int)($sobra/60);
        $sobra = $sobra % 60;
        //Total segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tempo,0,",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>