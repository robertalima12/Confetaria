<?php
$servername = "localhost";
$username = "root"; // 
$password = "";     // 
$dbname = "confeitaria_juliana"; // 

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


?>
