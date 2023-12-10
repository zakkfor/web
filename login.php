<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE login = '$login' AND pass = '$password'";
    $result = $conn->query($query);
    

    if ($result->num_rows > 0) {
        $_SESSION['login'] = $login;
        header("Location: reviewspage.php");
        exit;
    } else {
        echo "Неправильний логін або пароль";
    }
}
?>
