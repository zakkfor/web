<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: registerpage.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews page</title>
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
    <h1>Ви успішно авторизовані</h1>
    <h2>Залиште свій коментар</h2>

    <form action="add_comment.php" method="post">
        <textarea name="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Залишити коментар">
    </form> 
 
    
    <script src="script.js"></script>
</body>
</html>