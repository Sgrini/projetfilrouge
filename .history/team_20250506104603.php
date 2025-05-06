<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Importation des styles et des icônes -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/style/main.css" />
    <title>Team Roaster</title>
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
                        <a href="signup.php" class="action-button pro">S'inscrire</a>
                        <a href="login.php" class="action-button">Se connecter</a>
                    </div>
                </ul>
            </div>
        </div>
    </header>
    <div class="sidebar">
        <h2>Tableau de bord</h2>
        <ul>
            <li>📊 Tableau de bord</li>
            <li><a href="admin.html">➕ Créer Événement</a></li>
            <li><a href="team.html">⚙️ Management d'équipe</a></li>
            <li>🎟️ Tickets</li>
        </ul>
    </div>
    <div class="team__wrapper">
        <h2>Team Roster</h2>
        <button class="add-button">+ Ajouter joueur</button>
        <table>
            <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Numéro</th>
                    <th>Poste</th>
                    <th>Taille</th>
                    <th>Poids</th>
                    <th>Note de popularité</th>
                    <th>Gérer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Michael Johnson<br /><small>Meneur</small></td>
                    <td>#23</td>
                    <td>Meneur</td>
                    <td>1,80m</td>
                    <td>75 kg</td>
                    <td>⭐⭐⭐⭐☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>James Wilson<br /><small>Ailier</small></td>
                    <td>#34</td>
                    <td>Ailier fort</td>
                    <td>1,90m</td>
                    <td>80 kg</td>
                    <td>⭐⭐⭐☆☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>David Smith<br /><small>Pivot</small></td>
                    <td>#12</td>
                    <td>Pivot</td>
                    <td>2,05m</td>
                    <td>100 kg</td>
                    <td>⭐⭐⭐⭐⭐</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Lucas Brown<br /><small>Ailier</small></td>
                    <td>#45</td>
                    <td>Ailier</td>
                    <td>1,95m</td>
                    <td>85 kg</td>
                    <td>⭐⭐⭐⭐☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Ryan Taylor<br /><small>Meneur</small></td>
                    <td>#7</td>
                    <td>Meneur</td>
                    <td>1,82m</td>
                    <td>78 kg</td>
                    <td>⭐⭐⭐☆☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Chris Anderson<br /><small>Arrière</small></td>
                    <td>#22</td>
                    <td>Arrière</td>
                    <td>1,88m</td>
                    <td>82 kg</td>
                    <td>⭐⭐⭐⭐☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Matthew White<br /><small>Ailier fort</small></td>
                    <td>#30</td>
                    <td>Ailier fort</td>
                    <td>1,92m</td>
                    <td>87 kg</td>
                    <td>⭐⭐⭐☆☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Joshua Miller<br /><small>Pivot</small></td>
                    <td>#50</td>
                    <td>Pivot</td>
                    <td>2,10m</td>
                    <td>110 kg</td>
                    <td>⭐⭐⭐⭐⭐</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Anthony Martinez<br /><small>Arrière</small></td>
                    <td>#14</td>
                    <td>Arrière</td>
                    <td>1,86m</td>
                    <td>80 kg</td>
                    <td>⭐⭐⭐⭐☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Daniel Thomas<br /><small>Meneur</small></td>
                    <td>#3</td>
                    <td>Meneur</td>
                    <td>1,78m</td>
                    <td>72 kg</td>
                    <td>⭐⭐⭐⭐☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>William Scott<br /><small>Ailier</small></td>
                    <td>#25</td>
                    <td>Ailier</td>
                    <td>1,93m</td>
                    <td>88 kg</td>
                    <td>⭐⭐⭐☆☆</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>
                <tr>
                    <td>Robert Jackson<br /><small>Ailier fort</small></td>
                    <td>#18</td>
                    <td>Ailier fort</td>
                    <td>1,96m</td>
                    <td>90 kg</td>
                    <td>⭐⭐⭐⭐⭐</td>
                    <td class="gerer">✏️ 🗑️</td>
                </tr>

            </tbody>
        </table>
        <div class="card-wrapper">
            <div class="card">
                <h3>Stats de l'équipe</h3>
                <p>Joueurs total: 12</p>
                <p>Taille moyen: 1,85m</p>
                <p>Poids Moyen : 80kg</p>
            </div>
            <div class="card">
                <h3>Prochain match</h3>
                <p>Adversaire: Warriors</p>
                <p>Date: 15 Mars 2025</p>
                <p>Localisation: Domicile</p>
            </div>
            <div class="card">
                <h3>Santé d'équipe</h3>
                <p>Joueurs actifs: 10</p>
                <p>Bléssée: 2</p>
                <p>En récupreration: 1</p>
            </div>
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