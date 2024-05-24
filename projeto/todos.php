<?php
include 'includes/functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    if (!empty($task)) {
        addTodo($user_id, $task);
    }
}

$todos = getTodos($user_id);
?>

<form method="POST" action="todos.php">
    <input type="text" name="task" placeholder="Nova tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<ul>
    <?php while ($todo = $todos->fetch_assoc()): ?>
        <li><?php echo $todo['task']; ?></li>
    <?php endwhile; ?>
</ul>

<a href="logout.php">Logout</a>
