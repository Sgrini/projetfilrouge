<?php
// connexion à la bdd
try {
    $db = new PDO("mysql:host=localhost;port=3307;dbname=gestclub;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "Connexion échouée" . $e->getMessage();
    exit;
}
