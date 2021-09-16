<?php
session_start(); // Démarrage de la session  

// Si la session n'existe pas 
if(!isset($_SESSION['user']))
{
    header('Location:/../views/form/login.php?smgCode=30');
    die();
}

include(dirname(__FILE__).'/../utils/addImage.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    SaveImage('avatar_file', '../uploads/avatars/' . $_SESSION['user']->id . '.png');

    header('Location: ../controllers/landing-ctrl.php?smgCode=35');
    die();
}

// +++++++++++++++++++Templates et vues+++++++++++++++++++++++++++
require_once(dirname(__FILE__).'/../views/templates/header.php');
require_once(dirname(__FILE__) .'/../views/templates/navbar.php');
require_once(dirname(__FILE__) .'/../views/form/userAddAvatar.php');
require_once(dirname(__FILE__) .'/../views/templates/footer.php');
