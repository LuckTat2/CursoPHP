<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valorSaque = $_GET['valorSaque'] ?? 0;
    ?>
    <header><h1>Caixa Eletrônico</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valorSaque">Qual valor você deseja sacar? (R$)<sup>*</sup>
            </label>
            <input type="number" name="valorSaque" id="idValorSaque" step="5" value="<?=$valorSaque?>" required>     <!--step é o passo, nesse caso vai contar de 5 em 5-->
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $restoSaque = $valorSaque;
        //Saque de R$100
        $tot100 = (int)($restoSaque / 100);     //Também é possível utilizar a função floor no lugar de (int) com o mesmo resultado
        $restoSaque %= 100;
        //Saque de R$50
        $tot50 = (int)($restoSaque / 50);
        $restoSaque %= 50;
        //Saque de R$10
         $tot10 = (int)($restoSaque / 10);
        $restoSaque %= 10;
        //Saque de R$5
        $tot5 = (int)($restoSaque / 5);
        $restoSaque %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($valorSaque,2,",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota">x<?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota">x<?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>