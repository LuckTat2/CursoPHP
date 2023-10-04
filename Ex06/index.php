<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            const ESTADO = "RJ";
            echo "Moro no ".ESTADO."</p>";

            echo "Estamos no ano de ".date('Y')."</p>";

            $nome = "Rodrigo";
            $sobrenome = "Nogueira";
            echo "$nome \"Minotauro\" $sobrenome"."</p>";

            //string heredoc           
            $curso = "PHP";
            $ano = date('Y');
            echo <<< TESTE
                Estou estudando
                    $curso em $ano
                            </p>
                TESTE;    

            //string nowdoc
            $curso = "PHP";
            $ano = date('Y');
            echo <<< 'TESTE'
                Estou estudando
                    $curso em $ano
                TESTE;  
        ?>
    </h1>
</body>
</html>