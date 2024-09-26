<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? '0';
        $reajuste = $_GET['reajuste'] ?? '0';
        $aumento = $preco * $reajuste / 100;
        $novoPreco = $preco + $aumento;
        //formula   x = valor * porc / 100
    ?>
    <header><h1>Reajustador de Preços</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idPreco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reajuste">Qual será o percentual de reajuste?(<strong><span id="porc">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="idReajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "<p>O produto que custava R$".number_format($preco,2,",",".")." com <strong>$reajuste%</strong> de aumento vai passar a custar <strong>".number_format($novoPreco,2,",",".")."</strong> a partir de agora.</p>"
        ?>
    </section>
    <script>
        //Declarações automáticas
        mudaValor()

        function mudaValor(){
            porc.innerText = idReajuste.value; //Por padrão, o javascript busca por ID
        }
    </script>
</body> 
</html>