<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php 
                echo "Gerando um número aleatório entre 0 e 100...<br>";
                echo "<strong>".mt_rand(0,100)."</strong>";

                //Se precisar gerar números aleatórios de forma criptografada e segura, usa-se o random_int()
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
    </main>
</body>
</html>