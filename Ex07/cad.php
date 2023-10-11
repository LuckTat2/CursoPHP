<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //$_REQUEST é a junção de $_GET, $_POST e $_COOKIES
            $nome = $_GET['nome'] ?? "Sem nome"; //Caso não for enviado, irá retornar a string após ??
            $sobrenome = $_GET['sobrenome'] ?? "Desconhecido";
            echo "<p>É um grande prazer em te conhecer, $nome $sobrenome.";
        ?>
        <!--Volta para a página anterior-->
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>