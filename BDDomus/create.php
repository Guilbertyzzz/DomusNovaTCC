<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $conn->real_escape_string($_POST['name']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form method="POST" action="">
        Nome: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="password" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
