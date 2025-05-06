<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Importation des styles et des icônes -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="/style/main.css" />
  <title>MNS Gest Club</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="./img/basketballicon.svg" alt="basket icon" />
          <a href="index.html">MNS Gest Club</a>
        </div>
        <div class="navbar__main">
          <ul class="links">
            <li><a class="nav__link" href="index.php">Accueil</a></li>
            <li><a class="nav__link" href="events.php">Evenements</a></li>
            <li><a class="nav__link" href="admin.php">Coach</a></li>
            <li><a class="nav__link" href="#foire_aux_questions">FAQ</a></li>
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
            <a href="signup.php" class="action-button pro">S'inscrire</a>
            <a href="login.php" class="action-button">Se connecter</a>
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
          <li><a href="index.php">Accueil</a></li>
          <li><a href="events.php">Evenements</a></li>
          <li><a href="admin.php">Coach</a></li>
          <li><a href="community.php">Communauté</a></li>
          <div class="divider"></div>
          <div class="buttons-burger-menu open">
            <a href="#" class="action-button pro">S'inscrire</a>
            <a href="login.php" class="action-button">Se connecter</a>
          </div>
        </ul>
      </div>
    </div>
  </header>
  <section class="events__section">
    <div class="container">
      <div>
        <h1>Evenements star</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
          tempora repellendus quidem odit labore.
        </p>
      </div>
      <!-- Événement en cours -->
      <div class="events__current">
        <div class="events__current-details">
          <h3 class="events__current-details-title">
            1/4 de Finale du Tournoi National
          </h3>
          <p>Location</p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam
            odit vero laboriosam quasi!
          </p>
          <button class="button__book">Réserver ma place</button>
        </div>

        <div class="events__img-wrapper">
          <img class="events__img" src="/img/eventbasket.jpg" alt="event basket game" />
        </div>
      </div>
      <div>
        <div>
          <!-- Liste des événements -->
          <button class="events__all-button">Voir tout</button>
          <button class="events__incoming-button">A venir</button>
        </div>
        <hr class="separator" />
        <div class="event">
          <div class="date">
            <div class="day">14</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">1/2 Finale du Tournoi National</div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
        <hr class="separator" />

        <div class="event">
          <div class="date">
            <div class="day">17</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">Finale du Tournoi National</div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
        <hr class="separator" />

        <div class="event">
          <div class="date">
            <div class="day">18</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">
              Remise des trophés du Tournoi National
            </div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Pied de page -->
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