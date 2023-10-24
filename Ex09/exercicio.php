<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <form action="superglobais.php?tipo=Aluno&turno=Manhã" method="post"> <!--Está enviando dados via GET na action do formulário-->
            <label for="usuario">Usúario</label>
            <input type="text" name="usuario" id="idusuario">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="idsenha">
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>