<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada e Raiz Cúbica</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 1;
        $raizQuad = $numero ** (1/2); 
        $raizCub = $numero ** (1/3);
    ?>
    <header><h1>Informe um número</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" value="<?=$numero?>" required>
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>".number_format($raizQuad,2,",",".")."</strong></li>";
            echo "<li>A sua raiz cubica é <strong>".number_format($raizCub,2,",",".")."</strong></li></ul>";
        ?>
        
    </section>
</body>
</html>