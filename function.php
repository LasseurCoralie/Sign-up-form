<?php

// Je vérifie et récupère les données utilisateurs avec méthode POST

$pseudoRecup = isset($_POST['pseudo']);
if ($pseudoRecup){
    $pseudo = $_POST['pseudo'];
}
// var_dump($pseudo);

$passwordRecup = isset($_POST['password']);
if ($passwordRecup){
    $paswword = $_POST['password'];
}
// var_dump($pseudo);

$emailRecup = isset($_POST['email']);
if ($emailRecup){
    $email = $_POST['email'];
}
// var_dump($email);

$ageRecup = isset($_POST['age']) && is_numeric($_POST['age']);
if ($ageRecup){
    $age = $_POST['age'];
}
// var_dump($age);

