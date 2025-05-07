<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/connect.php";

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
    session_start();

    $_SESSION['utilisateur_id'] = $utilisateur['utilisateur_id'];
    $_SESSION['role_id'] = $utilisateur['role_id'];
    $_SESSION['utilisateur_nom'] = $utilisateur['utilisateur_nom'];

    // redirection selon le rôle
    if ($_SESSION['role_id'] === 1) {
      redirect("../admin.php");
    } else {
      redirect("../index.php");
    }
  } else {
    $erreur = "identifiant ou mot de passe incorrect";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="/style/main.css" />
  <title>Connect Club</title>
</head>


<div class="form-container">
  <p class="title">Connectez-Vous</p>
  <form action="login.php" method="post" class="form">
    <input name="utilisateur_mail" class="input" placeholder="Email" />
    <input name="utilisateur_mot_de_passe" class="input" placeholder="Password" />
    <p class="page-link">
      <?php if (isset($erreur)) echo "<span>$erreur</span> <br>"; ?>
      <span class="page-link-label">Mot de Passe oublié ?</span>
    </p>
    <button class="form-btn">Connexion</button>
  </form>

  <p class="sign-up-label">
    Pas encore de compte ?<span class="sign-up-link">M'inscrire</span>
  </p>
  <a href="/index.php"><button class="button__back">Retour à l'accueil</button></a>
</div>
</div>
<br />
</div>
<footer>
  <div class="footer__contenu-wrapper">
    <div class="contenu-footer">
      <div class="footer__bloc-wrapper">
        <div class="bloc">
          <h3>Informations légales</h3>
          <ul class="liste-services">
            <li><a href="#">Politiques de confidentialité</a></li>
            <li><a href="#">CGU</a></li>
            <li><a href="#">Mentions légales</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bloc-wrapper">
        <div class="bloc">
          <h3>Liens</h3>
          <ul class="liste-informations">
            <li>Nous connaître</li>
            <li>Fonctionnalités</li>
            <li>Clubs partenaires</li>
          </ul>
        </div>
      </div>
      <!-- FOOTER: Informations légales et contact -->
      <div class="footer__bloc-wrapper">
        <div class="bloc footer-contact" id="contact">
          <h3>Contact</h3>
          <ul>
            <li>06 06 06 06 06</li>
            <li>supportclient@contact.com</li>
            <li>86 rue aux arènes, Metz, 57000</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="copyright">© 2025 MNS Gest Club. Tout droits réservés.</p>
  </div>
</footer>
<script src="script.js"></script>
</body>

</html>