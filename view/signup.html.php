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
                <h1>Inscription</h1>
                <form action="signup.php" method="post">
                    <label>Je suis :</label>
                    <div class="radio-group">
                        <input type="radio" id="fan" name="role" value="2" checked><label for="fan">Fan</label>
                        <input type="radio" id="coach" name="role" value="1"><label for="coach">Coach</label>
                    </div>

                    <div class="input-group">
                        <input type="text" placeholder="Nom" name="nom">
                        <input type="text" placeholder="prenom" name="prenom">
                    </div>

                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Mot de passe" name="mdp">

                    <div class="input-group">
                        <input type="text" placeholder="Ville" name="ville">
                        <input type="text" placeholder="Code Postale" name="code-postale">
                    </div>
                    <input type="text" placeholder="Votre adresse postale" name="adresse">
                    <input type="text" placeholder="Votre numéro de téléphone" name="telephone">
                    <input type="text" placeholder="Votre date de naissance" name="date-de-naissance">
            </div>

            <input type="submit" class="form-btn" value="M'inscrire">

            <br>
            <a href="index.php"><button class="button__back">Retour à l'accueil</button></a>
            </form>
        </div>
        </div>
    </main>

    <?php require_once "_footer.html.php"; ?>

    <script src="script.js"></script>
</body>

</html>