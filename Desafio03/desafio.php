<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php
                $valor = $_POST['num'];
                $valordolar = $valor / 5.06;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus ".numfmt_format_currency($padrao,$valor,"BRL")." equivalem a <strong> ".numfmt_format_currency($padrao,$valordolar,"USD")."</strong>";

                //echo "Seus R$ ".number_format($valor,2,",",".")." equivalem a <strong>US$ ".number_format($valordolar,2,",",".")."</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html> 