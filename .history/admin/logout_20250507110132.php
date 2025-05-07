<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";
// démarrer la session
session_start();

//Détruire toutes les données de la session
session_unset();
session_destroy();

// Rediriger vers la page d'accueil principale
redirect("/admin/login.php");
