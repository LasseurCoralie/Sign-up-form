<?php 
    // session_start();

    // setcookie('nom', $_POST['pseudo']);
    // setcookie('password', $_POST['password']);

    // var_dump($_COOKIE['nom']);

    require 'data.php';
    require 'function.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="stylesheet">
        <title>La forme du cookie</title>
    </head>

<header id="header-menu">

    <nav class="header-nav-menu">
        <ul class="header-nav-menu-list">
        <?php 
            foreach($nav as $elementNavKey => $elementNavValue) : 
        ?>
        <li class="header-nav-menu-element"><a href ="<?=$elementNavValue?>" class="active header-nav-menu-link"><?= $elementNavKey ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>

</header>

<body>