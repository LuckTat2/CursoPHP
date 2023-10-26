<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatoma da Divisão</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $restoDiv = $dividendo % $divisor;
    ?>
    <header><h1>Anatomia de uma Divisão</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">divisor</label>
            <input type="number" name="divisor" id="idDivisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$restoDiv?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>