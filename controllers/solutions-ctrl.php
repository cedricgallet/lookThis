<?php
session_start(); // Démarrage de la session  
require_once __DIR__.'/../utils/db.php'; // Connexion bdd

// si la session n'existe pas ou si l'utilisateur n'est pas connecté on redirige
// Si la session n'existe pas 
if(!isset($_SESSION['user']))
{
    header('Location:/../views/form/login.php');
    die();
}

require_once __DIR__.'/../views/templates/navbar.php';
require_once __DIR__.'/../views/templates/header.php';
require_once __DIR__.'/../views/solutions.php';
require_once __DIR__.'/../views/templates/footer.php';
