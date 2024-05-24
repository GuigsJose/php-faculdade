<?php 
    include 'db.php';

    function registerUser($username,$password){
        global $banco;
        $passwordHash = password_hash($password,PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        $stmt = $banco->prepare($sql);
        $stmt->bind_param("ss",$username,$passwordHash);
        return $stmt->execute(); 
    }

    function loginUser($username,$password){
        global $banco;
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $banco->prepare($sql);
        $stmt -> bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password,$user["password"])){
                return $user;
            }
        }
        return false;
    }


    function addTodo($userId, $task) {
        global $banco;
        $sql = "INSERT INTO todos (user_id, task) VALUES (?, ?)";
        $stmt = $banco->prepare($sql);
        $stmt->bind_param("is", $userId, $task);
        return $stmt->execute();
    }
    
    function getTodos($userId) {
        global $banco;
        $sql = "SELECT * FROM todos WHERE user_id = ?";
        $stmt = $banco->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result();
    }

?>