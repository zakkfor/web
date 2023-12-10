<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
<header>
        
        <img class= "logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Counter-Strike_CS_logo.svg/1024px-Counter-Strike_CS_logo.svg.png" 
        width="60px" height="50">
         
        <nav>
            <ul>
                <li><a href="index.php">Головна</a></li>
                <li><a href="CS2.php">CS2</a></li>
                <li><a href="CSGOweb.php">CSGO</a></li>
                <li><a href="CS1.6.php">CS1.6</a></li>
                <li><a href="registerpage.php">Register</a></li>
                <li><a href="reviewspage.php">Reviews</a></li>
            </ul>
        </nav>

</header>
    <p> Зареєструйтесь </p>
    <form action="register.php" method="post">
        <input type="text" placeholder="username" name="username"><br>
        <input type="text" placeholder="login" name="login"><br>
        <input type="text" placeholder="password" name="password"><br>
        <input type="text" placeholder="email" name="email"><br>
        <button type="submit">register</button>
    </form></br>
    <p>Авторизуйтесь</p>
    <form action="login.php" method="post">
        <input type="text" placeholder="login" name="login"><br>
        <input type="text" placeholder="password" name="password"><br>
        <button type="submit">login</button>
    </form></br>

    <script src="script.js"></script>
</body>
</html