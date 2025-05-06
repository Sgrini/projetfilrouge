<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style/main.css">
    <title>Événements Basket</title>
</head>
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

<body>
    <div class="shop__container">
        <h1>Trouve ton événement basket</h1>
        <div class="search-filters">
            <input type="text" placeholder="Rechercher un événement..">
            <select>
                <option>Toutes catégories</option>
                <option selected>Championnat</option>
            </select>
            <select>
                <option>Date</option>
            </select>
        </div>
        <div class="filters">
            <button>Prix: Tous</button>
            <button>Location</button>
            <button>Équipe</button>
            <button>+ filtres</button>
        </div>
        <div class="events">
            <div class="event-card">
                <div class="event-img"></div>
                <div class="event-info">
                    <h3>1/4 de Finale de Championnat <span class="price">35€</span></h3>
                    <p>Équipe C vs Équipe D</p>
                    <p>📅 10 Mars, 2025 📍 City Stadium</p>
                    <button>Réserver</button>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img"></div>
                <div class="event-info">
                    <h3>Demi Finale de Championnat <span class="price">40€</span></h3>
                    <p>Équipe E vs Équipe F</p>
                    <p>📅 15 Mars, 2025 📍 National Arena</p>
                    <button>Réserver</button>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img"></div>
                <div class="event-info">
                    <h3>Finale Championnat National <span class="price">45€</span></h3>
                    <p>Équipe A vs Équipe B</p>
                    <p>📅 20 Mars, 2025 📍 Sports Arena</p>
                    <button>Réserver</button>
                </div>
            </div>
        </div>
        <div class="pagination">
            <button>&lt;</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>&gt;</button>
        </div>
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