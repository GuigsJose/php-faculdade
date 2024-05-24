<?php
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (registerUser($username, $password)) {
        echo "Registro bem-sucedido. <a href='login.php'>Faça login</a>";
    } else {
        echo "Erro ao registrar.";
    }
}
?>

<form method="POST" action="register.php">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Registrar</button>
</form>
