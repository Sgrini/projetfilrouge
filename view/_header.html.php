    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./img/basketballicon.svg" alt="basket icon" />
                    <a href="#">MNS Gest Club</a>
                </div>
                <div class=" navbar__main">
                    <ul class="links">
                        <?php if (!estConnecte()): ?>
                            <li><a class="nav__link" href="index.php">Accueil</a></li>
                            <li><a class="nav__link" href="events.php">Evenements</a></li>
                            <li><a class="nav__link" href="#foire_aux_questions">FAQ</a></li>
                        <?php elseif (estConnecte() && !estAdmin()): ?>
                            <li><a class="nav__link" href="index.php">Accueil</a></li>
                            <li><a class="nav__link" href="events.php">Evenements</a></li>
                            <li><a class="nav__link" href="#foire_aux_questions">FAQ</a></li>
                            <li><a class="nav__link" href="admin.php">Mon compte</a></li>
                        <?php elseif (estAdmin()): ?>
                            <li><a class="nav__link" href="index.php">Accueil</a></li>
                            <li><a class="nav__link" href="admin.php">Mon compte</a></li>
                        <?php else: ?>
                        <?php endif; ?>


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
                        <?php if (!isset($_SESSION['utilisateur_id'])): ?>

                            <a href="signup.php" class="action-button pro">S'inscrire</a>
                            <a href="login.php" class="action-button">Se connecter</a>
                        <?php else: ?>
                            <a href="logout.php" class="action-button">Se déconnecter</a>
                        <?php endif; ?>
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