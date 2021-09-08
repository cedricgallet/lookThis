<?php
if (empty(session_id())){
    session_start(); // Démarrage de la session  
}       
require_once __DIR__. '/../models/User.php';

// Nettoyage de l'id passé en GET dans l'url
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

// Nettoyage du token passé en GET dans l'url
$tokenGet = trim(filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING));

// Récupération du compte user en bdd
$user = User::get($id);

//Comparer le token en GET avec le token en base
if($user && $tokenGet==$user->confirmation_token){
    $result = User::validateSignUp($id);
    if($result){
        $_SESSION['user'] = $user;
        $isRegistered = true;
    }
}

