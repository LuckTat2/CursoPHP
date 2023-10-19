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
                $cot = 5.06;
                $valor = $_POST['num'] ?? 0;
                $valordolar = $valor / $cot;

                //Formatação de moedas com internacionalização
                //Mostrando o resultado com a biblioteca intl (Internallization PHP)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Define o padrão de formatação dos números como pt_BR
                echo "Seus ".numfmt_format_currency($padrao,$valor,"BRL")." equivalem a <strong> ".numfmt_format_currency($padrao,$valordolar,"USD")."</strong>";

                //Outra forma de escrever seria com number format
                //echo "Seus R$ ".number_format($valor,2,",",".")." equivalem a <strong>US$ ".number_format($valordolar,2,",",".")."</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html> 