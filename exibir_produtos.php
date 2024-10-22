<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<style>
        .cadastrar-produto {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
        .cadastrar-produto img {
            vertical-align: middle;
        }
    </style>
<body>
    <h1>Produtos Cadastrados</h1>
    <a href="processar_cadastro.php" class="cadastrar-produto">
        <img src="plus-icon.png" alt="+" width="20" height="20"> Cadastrar Produto
    </a>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gmdl";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve products
    $sql = "SELECT id, nome, preco, descricao, codigo_barras, imagem, data_cadastro FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["nome"] . "</h2>";
            echo "<p><strong>Preço:</strong> R$ " . $row["preco"] . "</p>";
            echo "<p><strong>Descrição:</strong> " . $row["descricao"] . "</p>";
            echo "<p><strong>Código de Barras:</strong> " . $row["codigo_barras"] . "</p>";
            echo "<p><strong>Data de Cadastro:</strong> " . $row["data_cadastro"] . "</p>";
            echo "<img src='" . $row["imagem"] . "' alt='" . $row["nome"] . "' style='max-width:200px;'>";
            echo "</div><hr>";
        }
    } else {
        echo "Nenhum produto encontrado.";
    }

    $conn->close();
    ?>
</body>
</html>
