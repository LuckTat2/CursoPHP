<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
   <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $num = $_POST['num'] ?? 0;  //Se não vier nenhum valor, ele envia 0
                echo "O número escolhido foi: ".$num."<br>";
                echo "O seu antecessor é: ".($num-1)."<br>";
                echo "O seu sucessor é: ".($num+1)."<br>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05Voltar</button>
   </main>
</body>
</html>