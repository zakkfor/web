<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    $query = "INSERT INTO `register` (login, pass, email, username) VALUES ('$login', '$password', '$email', '$username')";
    $result = $conn->query($query);
    if ($result) {
    echo "Ви успішно зареєстровані";
    header("Location: registerpage.php?registered=true");
    exit;
    } else {
    echo "Помилка при реєстрації: " . $conn->error;
    }
}
?>
