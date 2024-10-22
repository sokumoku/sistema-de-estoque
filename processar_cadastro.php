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

// Handle file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

$sql = "INSERT INTO produtos (nome, preco, descricao, codigo_barras, imagem) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsss", $nome, $preco, $descricao, $codigo_barras, $imagem);

// Get form data
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$codigo_barras = $_POST['codigo_barras'];
$imagem = $target_file;

if ($stmt->execute()) {
    header("Location: exibir_produtos.php");
    exit();
} else {
    echo "Erro ao cadastrar produto: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
