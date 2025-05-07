<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <script src="script.js" defer></script>
  <title>MNS Sport Academy - Admin</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="./img/basketballicon.svg" alt="basket icon" />
          <a href="index.php">MNS Gest Club</a>
        </div>
        <div class="navbar__main">
          <ul class="links">
            <li><a class="nav__link" href="index.php">Accueil</a></li>
            <li><a class="nav__link" href="events.php">Evenements</a></li>
            <li><a class="nav__link" href="admin.php">Coach</a></li>
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
          <div class="divider"></div>
          <div class="buttons-burger-menu open">
            <a href="#" class="action-button pro">S'inscrire</a>
            <a href="#" class="action-button">Se connecter</a>
          </div>
        </ul>
      </div>
    </div>
  </header>

  <section class="admin__dashboard">
    <div class="sidebar">
      <h2>Tableau de bord</h2>
      <ul>
        <li>📊 Tableau de bord</li>
        <li><a href="admin.html">➕ Créer Événement</a></li>
        <li><a href="team.html">⚙️ Management d'équipe</a></li>
        <li>🎟️ Tickets</li>
      </ul>
    </div>
    <div class="admin__wrapper">
      <h1>Créer un événement</h1>
      <div class="form-container-admin">
        <form>
          <label for="titre">Titre Événement</label>
          <input type="text" id="titre" placeholder="Match championnat" disabled />

          <label for="event-image">Event Image</label>
          <div class="upload-box">
            📤 Faites glisser et déposez ou cliquez pour télécharger
          </div>

          <div class="inline-fields">
            <div>
              <label for="places">Places disponibles</label>
              <input type="number" id="places" value="100" />
            </div>
            <div>
              <label for="prix">Prix du ticket</label>
              <input type="text" id="prix" value="25.00" />
            </div>
          </div>

          <div class="calendar-container">
            <label for="date-time">Date et Heure du Match</label>
            <input type="datetime-local" id="date-time">
          </div>

          <label for="stade">Stade / Ville</label>
          <input type="text" id="stade" placeholder="Sports Arena" disabled />

          <label for="description">Description</label>
          <textarea id="description" placeholder="Détails de l'événement..."></textarea>

          <h2>Informations de l'équipe</h2>

          <label for="team">Nom d'équipe</label>
          <input type="text" id="team" value="Warriors" />

          <label for="players">Nom des joueurs</label>
          <input type="text" id="players" value="John Doe, Jane Smith" disabled />

          <div class="button-group">
            <button type="button" class="cancel">Annuler</button>
            <button type="submit" class="create">Créer</button>
          </div>
        </form>
      </div>
    </div>
  </section>


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