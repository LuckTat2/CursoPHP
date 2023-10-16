<?php 
    $valor = 25;
    $r = sqrt($valor); //Retorna raiz quadrada
    echo $r;
    //Também pode ser feito da seguinte maneira
    $r2 = 25 ** (1/2); //Se for raiz cúbica por exemplo faz 1/3 e assim por diante

    echo base_convert(25,10,16); //Converte a base, sendo primeiro o número, depois a base em que está e por último a base para qual será convertido
    
    //Funções para arrendondar números
    echo ceil(7,4); //P/ cima
    echo floor(7,6); //P/ baixo
    echo round(7,4); //Arredondamento arítmético

    echo min(5,6,3); //Retorna o menor valor
    echo max(4,6,8); //Retorna o maior valor

    echo intdiv(2,5); //Retorna a divisão inteira, diferente do módulo "%" que retorna o resto da divisão inteira

    //hypot() calcula a hipôtenusa, sin() calcula o seno, cos() calcula o coseno e tan() calcula a tangente

    echo pi(); //Retorna o valor de pi
    echo M_PI; //Retorna o valor de pi
?>