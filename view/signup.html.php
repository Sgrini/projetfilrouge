<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/style/main.css" />
    <title>Inscription</title>
</head>

<body>
    <!-- HEADER: Barre de navigation principale -->
    <?php require_once "_header.html.php"; ?>
    <main class="signup__main">
        <div class="form__signup-container">
            <div class="form__signup">
                <h2>Inscription</h2>
                <form>
                    <label>Je suis :</label>
                    <div class="radio-group">
                        <input type="radio" id="fan" name="role"><label for="fan">Fan</label>
                        <input type="radio" id="coach" name="role"><label for="coach">Coach</label>
                    </div>

                    <div class="input-group">
                        <input type="text" placeholder="Nom">
                        <input type="text" placeholder="Prénom">
                    </div>

                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Mot de passe">

                    <label for="club">Club préféré</label>
                    <select id="club">
                        <option>Sélectionnez un club</option>
                    </select>

                    <input type="text" placeholder="Nom du club">
                    <input type="text" placeholder="Votre ville">
                    <input type="text" placeholder="Votre adresse postale">

                    <label>Sexe</label>
                    <div class="radio-group">
                        <input type="radio" id="masculin" name="genre" class="signup__gender-choice"><label
                            for="masculin">Masculin</label>
                        <input type="radio" id="feminin" name="genre" class="signup__gender-choice"><label
                            for="feminin">Féminin</label>
                    </div>

                    <button class="form-btn">M'inscrire</button>
                    <br>
                    <a href="index.html"><button class="button__back">Retour à l'accueil</button></a>
                </form>
            </div>
        </div>
    </main>

    <?php require_once "_footer.html.php"; ?>

    <script src="script.js"></script>
</body>

</html>