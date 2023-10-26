<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador Número Real</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Analisador de Número real</h1>
        <p>
            <?php 
                $num = $_POST['num'] ?? 0;
                $parteInteira = (int)$num;  //Define o número como tipo inteiro
                $parteFrac = $num - $parteInteira;
                //number_format($num,",",".") primeiro é o separador de decimal e após o separador de milhar
                echo "Analisando o número <strong>".number_format($num,3,",",".")."</strong> informado pelo usuário:<br>";
                echo "<ul><li>A parte inteira do número é <strong>".number_format($parteInteira,3,",",".")."</strong><br></li>";
                echo "<li>A parte fracionária do número é <strong>".number_format($parteFrac,3,",",".")."</strong></li></ul>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html> 