<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte Coach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/style/main.css" />
</head>

<body>
    <!-- HEADER: Barre de navigation principale -->
    <?php require_once "_header.html.php"; ?>
    <div class="container">
        <div class="user-info">
            <div class="avatar">
                <img src="https://via.placeholder.com/40" alt="Avatar">
            </div>
            <h1>Bienvenue, Fan</h1>
        </div>


        <section class="upcoming-events">
            <h2>Mes réservations à venir</h2>

            <div class="events-container">
                <div class="event-card">
                    <div class="event-info">
                        <h3>Paris vs Lyon</h3>
                        <p class="date">15 Mai 2025 - 20:00</p>
                        <p class="location">Accor Arena, Paris</p>
                        <div class="tag vip">Place VIP</div>
                    </div>
                    <div class="event-actions">
                    </div>
                </div>

                <div class="event-card">
                    <div class="event-info">
                        <h3>Strasbourg vs Nantes</h3>
                        <p class="date">22 Mai 2025 - 19:30</p>
                        <p class="location">Rhenus Sport, Strasbourg</p>
                        <div class="tag nord">Tribune Nord</div>
                    </div>
                    <div class="event-actions">
                    </div>
                </div>
            </div>
        </section>

        <section class="find-friends">
            <h2>Retrouver mes amis</h2>

            <div class="search-container">
                <input type="text" placeholder="Rechercher un ami..." class="search-input">
                <button class="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>

            <div class="friends-container">
                <div class="friend-card">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/40" alt="Marie Laurent">
                    </div>
                    <div class="friend-info">
                        <h3>Marie Laurent</h3>
                        <p>2 événements en commun</p>
                    </div>
                </div>

                <div class="friend-card">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/40" alt="Thomas Martin">
                    </div>
                    <div class="friend-info">
                        <h3>Thomas Martin</h3>
                        <p>2 événements en commun</p>
                    </div>
                </div>

                <div class="friend-card">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/40" alt="Lucas Remy">
                    </div>
                    <div class="friend-info">
                        <h3>Lucas Remy</h3>
                        <p>1 événement en commun</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="past-events">
            <h2>Mes événements passés</h2>

            <table class="events-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Événement</th>
                        <th>Lieu</th>
                        <th>Place</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10 Avril 2025</td>
                        <td>Monaco vs Paris</td>
                        <td>Salle Gaston Médecin</td>
                        <td>Tribune Est</td>
                    </tr>
                    <tr>
                        <td>25 Mars 2025</td>
                        <td>Dijon vs Limoges</td>
                        <td>Palais des Sports</td>
                        <td>Place VIP</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <div class="sidebar">
        <h2>Tableau de bord</h2>
        <ul>
            <li>📊 Tableau de bord</li>
            <li><a href="admin.html">➕ Créer Événement</a></li>
            <li><a href="team.html">⚙️ Management d'équipe</a></li>
            <li>🎟️ Tickets</li>
        </ul>
    </div>
    <?php require_once "_footer.html.php"; ?>

</body>

</html>