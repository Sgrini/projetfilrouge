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
    <!-- HEADER: Barre de navigation principale -->
    <?php require_once "_header.html.php"; ?>

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
                    <select name="type_event" id="event_select">
                        <option value="">--Choisissez le type d'événement--</option>
                        <option value="dog">Match championnat</option>
                        <option value="cat">Match amical</option>
                        <option value="hamster">Match coupe</option>
                        <option value="parrot">Tournoi</option>
                    </select>
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
                    <input type="text" id="stade" placeholder="Sports Arena" />

                    <label for="description">Description</label>
                    <textarea id="description" placeholder="Détails de l'événement..."></textarea>

                    <h2>Informations de l'équipe</h2>

                    <label for="team">Nom d'équipe</label>
                    <input type="text" id="team" value="Warriors" />

                    <div class="button-group">
                        <button type="button" class="cancel">Annuler</button>
                        <button type="submit" class="create">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php require_once "_footer.html.php"; ?>
    <script src="script.js"></script>
</body>

</html>