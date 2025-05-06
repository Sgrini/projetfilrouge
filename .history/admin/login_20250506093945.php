<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/connect.php";

if (isset($_POST['utilisateur_mail']) && isset($_POST['utilisateur_mot_de_passe'])) {
  $stmt = $db->prepare("SELECT * FROM table_admin WHERE utilisateur_mail=:utilisateur_mail");
  $stmt->execute([":utilisateur_mail" => $_POST['utilisateur_mail']]);

  if ($row = $stmt->fetch()) {
    if (password_verify($_POST["utilisateur_mot_de_passe"], $row["utilisateur_mot_de_passe"])) {
      session_start();
      $_SESSION["is_logged"] = "L'utilisateur est authentifié.";
      var_dump("L'utilisateur est authentifié");
      exit;

      // Ici, à terme, plutôt qu'une chaine de caractère écrite à la main, on  va préférer incorporer un token d'authentification.
      redirect("index.php");
    } else {
      echo "login ou mot de passe incorrect";
    }
  } else {
    echo "login ou mot de passe incorrect";
    var_dump("L'utilisateur est authentifié");
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

<body>
  <header>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="../img/basketballicon.svg" alt="basket icon" />
          <a href="index.html">MNS Gest Club</a>
        </div>
        <div class="navbar__main">
          <ul class="links">
            <li><a class="nav__link" href="index.html">Accueil</a></li>
            <li><a class="nav__link" href="events.html">Evenements</a></li>
            <li><a class="nav__link" href="admin.html">Coach</a></li>
            <li><a class="nav__link" href="#foire_aux_questions">Communauté</a></li>
          </ul>
          <!-- Champ de recherche -->
          <div class="search">
            <input placeholder="Search" class="navbar__input" type="text" />
            <button class="navbar__button">
              <svg viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" height="16" width="16"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                </path>
              </svg>
            </button>
          </div>
          <!-- Boutons d'inscription et de connexion -->
          <div class="buttons">
            <a href="signup.html" class="action-button pro">S'inscrire</a>
            <a href="login.html" class="action-button">Se connecter</a>
          </div>
        </div>
      </div>
      <div class="burger-menu">
        <div class="burger-menu__nav">
          <a class="burger__logo">
            <img src="./img/basketballicon.svg" alt="" />
          </a>
          <div class="burger__btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        <ul class="burger-menu__links">
          <li><a href="index.html">Accueil</a></li>
          <li><a href="events.html">Evenements</a></li>
          <li><a href="about">Coach</a></li>
          <li><a href="contact">Communauté</a></li>
          <div class="divider"></div>
          <div class="buttons-burger-menu open">
            <a href="signup.html" class="action-button pro">S'inscrire</a>
            <a href="login.html" class="action-button">Se connecter</a>
          </div>
        </ul>
      </div>
    </div>
  </header>
  <div class="form-container">
    <p class="title">Connectez-Vous</p>
    <form class="form">
      <input name="utilisateur_mail" class="input" placeholder="Email" />
      <input name="utilisateur_mot_de_passe" class="input" placeholder="Password" />
      <p class="page-link">
        <span class="page-link-label">Mot de Passe oublié ?</span>
      </p>
      <button class="form-btn">Connexion</button>
    </form>
    <p class="sign-up-label">
      Pas encore de compte ?<span class="sign-up-link">M'inscrire</span>
    </p>
    <div class="buttons-container">
      <div class="apple-login-button">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="apple-icon" viewBox="0 0 1024 1024"
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M747.4 535.7c-.4-68.2 30.5-119.6 92.9-157.5-34.9-50-87.7-77.5-157.3-82.8-65.9-5.2-138 38.4-164.4 38.4-27.9 0-91.7-36.6-141.9-36.6C273.1 298.8 163 379.8 163 544.6c0 48.7 8.9 99 26.7 150.8 23.8 68.2 109.6 235.3 199.1 232.6 46.8-1.1 79.9-33.2 140.8-33.2 59.1 0 89.7 33.2 141.9 33.2 90.3-1.3 167.9-153.2 190.5-221.6-121.1-57.1-114.6-167.2-114.6-170.7zm-105.1-305c50.7-60.2 46.1-115 44.6-134.7-44.8 2.6-96.6 30.5-126.1 64.8-32.5 36.8-51.6 82.3-47.5 133.6 48.4 3.7 92.6-21.2 129-63.7z">
          </path>
        </svg>
        <span>Se connecter avec Apple</span>
      </div>
      <div class="google-login-button">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px"
          class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
  c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
  c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
          <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
  C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
          <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
  c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
          <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
  c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
          </path>
        </svg>
        <span>Se connecter avec Google</span>
      </div>
    </div>
    <br />
    <a href="index.html"><button class="button__back">Retour à l'accueil</button></a>
  </div>
  <?= password_hash("1234", PASSWORD_DEFAULT); ?>
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