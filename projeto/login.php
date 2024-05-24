<?php
include 'includes/functions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = loginUser($username, $password);
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: todos.php');
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>

<form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Login</button>
</form>
