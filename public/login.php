<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/auth.php";

// var_dump(password_hash("1234", PASSWORD_DEFAULT));
// exit;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['utilisateur_mail'];
  $mot_de_passe = $_POST['utilisateur_mot_de_passe'];

  // requête pour vérifier les identifiants
  $stmt = $db->prepare("SELECT utilisateur_id, utilisateur_nom, utilisateur_mot_de_passe, role_id FROM utilisateurs WHERE utilisateur_mail=:utilisateur_mail");
  $stmt->execute([":utilisateur_mail" => $email]);
  $utilisateur = $stmt->fetch();


  if ($utilisateur && password_verify($mot_de_passe, $utilisateur['utilisateur_mot_de_passe'])) {
    // authentifiquation réussie
    $_SESSION['utilisateur_id'] = $utilisateur['utilisateur_id'];
    $_SESSION['role_id'] = $utilisateur['role_id'];
    $_SESSION['utilisateur_nom'] = $utilisateur['utilisateur_nom'];

    // redirection selon le rôle
    if ($_SESSION['role_id'] === 1) {
      redirect("admin.php");
    } else {
      redirect("index.php");
    }
  } else {
    $erreur = "identifiant ou mot de passe incorrect";
  }
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/../view/login.html.php";
