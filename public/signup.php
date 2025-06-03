<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/auth.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("SELECT 1 FROM utilisateurs WHERE utilisateur_mail = :email LIMIT 1");
    $stmt->execute(['email' => $_POST['email']]);

    if ($stmt->fetch()) {
        echo "Cet email est déjà utilisé.";
        exit;
    }

    // hachage du mdp
    $motDePasseHash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    // nettoyage de données
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    $date = $_POST['date-de-naissance'];

    if (!empty($date)) {

        $dateObj = DateTime::createFromFormat('d/m/Y', $date);

        if ($dateObj === false) {
            echo "Format de date invalide.";
            exit;
        }
        $dateSQL = $dateObj->format('Y-m-d');
    }

    // création d'utilisateur

    $stmt = $db->prepare(
        "INSERT INTO utilisateurs (
            utilisateur_nom,
            utilisateur_prenom,
            utilisateur_numero_de_telephone,
            utilisateur_date_de_naissance, 
            utilisateur_ville,
            utilisateur_adresse_postale,
            utilisateur_code_postale,
            utilisateur_mail,
            utilisateur_mot_de_passe,
            role_id
        ) VALUES (
            :nom, :prenom, :tel, :date_naissance, :ville,
            :adresse, :code_postal, :email, :mot_de_passe, :role_id
        )
    "
    );

    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'tel' => $_POST['telephone'],
        'date_naissance' => $dateSQL,
        'ville' => $_POST['ville'],
        'adresse' => $_POST['adresse'],
        'code_postal' => $_POST['code-postale'],
        'email' => $email,
        'mot_de_passe' => $motDePasseHash,
        'role_id' => $_POST['role_id'] ?? 2 // 2 = utilisateur par défaut par exemple
    ]);
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/../view/signup.html.php';
