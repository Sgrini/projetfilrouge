<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/style/main.css" />
    <title>Connect Club</title>
</head>

<body>
    <?php require_once "_header.html.php"; ?>

    <div class="form-container">
        <p class="title">Connectez-Vous</p>
        <form action="login.php" method="post" class="form">
            <input name="utilisateur_mail" class="input" placeholder="Email" />
            <input name="utilisateur_mot_de_passe" class="input" placeholder="Password" />
            <p class="page-link">
                <?php if (isset($erreur)) echo "<span>$erreur</span> <br>"; ?>
                <span class="page-link-label">Mot de Passe oublié ?</span>
            </p>
            <button class="form-btn">Connexion</button>
        </form>

        <p class="sign-up-label">
            Pas encore de compte ?<span class="sign-up-link">M'inscrire</span>
        </p>
        <a href="/index.php"><button class="button__back">Retour à l'accueil</button></a>
    </div>
    </div>
    <br />
    </div>

    <?php require_once "_footer.html.php"; ?>
    <script src="script.js"></script>
</body>

</html>