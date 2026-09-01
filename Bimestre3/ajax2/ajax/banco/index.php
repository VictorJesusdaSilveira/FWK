<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="email">Consultar e-mail</label>
        <input type="email" name="email" id="email" app-url="consultas.php" app-target="#resultado-busca" app-event="blur">
        
        <div id="resultado-busca">
            <label for="senha">Informe a senha</label>
            <input type="password" name="senha" id="senha">
            <label id="RespostaSenha"></label>
        </div>
    </form>
    <script src="app-ajax.js"></script>
</body>
</html>