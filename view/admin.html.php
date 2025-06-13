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
                <li><a href="team.html">⚙️ Mes événements</a></li>
                <li>🎟️ Tickets</li>
            </ul>
        </div>
        <div class="admin__wrapper">
            <h1>Créer un événement</h1>
            <div class="form-container-admin">
                <form method="POST" action="admin.php">
                    <label for="titre">Titre Événement</label>
                    <select name="evenement_nom" id="event_select">
                        <option value="">Sélectionnez votre type d'événement</option>
                        <?php foreach ($type_evenements as $type_evenement) {
                            echo '<option value="' . hsc($type_evenement['evenement_type_id']) . '">' . hsc($type_evenement['evenement_type_nom']) . '</option>';
                        }
                        ?>
                    </select>

                    <div class="inline-fields">
                        <div>
                            <label for="places">Places disponibles</label>
                            <input type="number" id="places" value="100" name="evenement_nombre_place" />
                        </div>
                        <div>
                            <label for="prix">Prix du ticket</label>
                            <input type="text" id="prix" value="25.00" name="evenement_prix" />
                        </div>
                    </div>

                    <div class="calendar-container">
                        <label for="date-time">Date et Heure du Match</label>
                        <input type="datetime-local" id="date-time" name="evenement_date">
                    </div>

                    <label for="stade">Stade / Ville</label>
                    <input type="text" id="stade" placeholder="Sports Arena" name="evenement_ville" />

                    <label for="description">Description</label>
                    <textarea id="description" placeholder="Détails de l'événement..."></textarea>

                    <h2>Informations de l'équipe</h2>

                    <label for="team">Nom d'équipe</label>
                    <input type="text" id="team" value="Warriors" />
                    <input type="hidden" name="evenement_id" value="0">

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