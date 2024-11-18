<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$peso = $_POST['peso'];
$imagem = $_FILES['imagem']['name'];
$destino = "../img/" . $imagem;
move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'seu_usuario', 'sua_senha', 'confeitaria_juliana');
$sql = "INSERT INTO produtos (nome, descricao, preco, peso, imagem) VALUES ('$nome', '$descricao', $preco, $peso, '$imagem')";
$conn->query($sql);
$conn->close();
?>
