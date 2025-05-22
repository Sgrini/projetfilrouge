<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style/main.css">
    <title>Événements Basket</title>
</head>

<body>
    <!-- HEADER: Barre de navigation principale -->
    <?php require_once "_header.html.php"; ?>
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
    <?php require_once "_footer.html.php"; ?>

    <script src="script.js"></script>
</body>

</html>