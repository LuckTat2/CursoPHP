<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                
                //Não se usa as aspas duplas porque como tem $ dentro da url, vai tentar interpolar e achar que é uma variável
                //Também é preciso colocar contra barra antes das aspas simples dentro da url, pois não se pode ter aspas simples dentro de asplas simples
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                
                $dados = json_decode(file_get_contents($url), true); //True define como vetor, false define como objeto
                $cot = $dados["value"][0]["cotacaoCompra"];

                $valor = $_POST['num'] ?? 0;
                $valordolar = $valor / $cot;

                //Formatação de moedas com internacionalização
                //Mostrando o resultado com a biblioteca intl (Internallization PHP)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Define o padrão de formatação dos números como pt_BR
                echo "Seus ".numfmt_format_currency($padrao,$valor,"BRL")." equivalem a <strong> ".numfmt_format_currency($padrao,$valordolar,"USD")."</strong><br>";

                //Outra forma de escrever seria com number format
                //echo "Seus R$ ".number_format($valor,2,",",".")." equivalem a <strong>US$ ".number_format($valordolar,2,",",".")."</strong>";

                echo "<h6>*Cotação obtida diretamente do site <a href='https://www.bcb.gov.br/'>Banco Central do Brasil</a></h6>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html> 