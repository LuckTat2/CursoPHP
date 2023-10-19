<pre>
<?php 
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");


    //Não se usa as aspas duplas porque como tem $ dentro da url, vai tentar interpolar e achar que é uma variável
    //Também é preciso colocar contra barra antes das aspas simples dentro da url, pois não se pode ter aspas simples dentro de asplas simples
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true); //True define como vetor, false define como objeto

    //var_dump($dados);

    $cot = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cot";
?>
</pre>