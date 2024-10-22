<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="processar_cadastro.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <label for="codigo_barras">Código de Barras:</label>
        <input type="text" id="codigo_barras" name="codigo_barras"><br><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" required><br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>
