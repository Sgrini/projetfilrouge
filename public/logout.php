<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/auth.php";



// Détruire toutes les données de la session
session_unset();
session_destroy();

// Rediriger vers la page d'accueil principale
redirect("login.php");
