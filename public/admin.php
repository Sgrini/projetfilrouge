<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../include/auth.php";

$stmt = $db->query("SELECT * FROM type_evenements");
$stmt->execute();
$type_evenements = $stmt->fetchAll();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $evenement_nom = $_POST['evenement_nom'];
    $evenement_date = $_POST['evenement_date'];
    $evenement_nombre_place = $_POST['evenement_nombre_place'];
    $evenement_ville = $_POST['evenement_ville'];
    $evenement_prix = $_POST['evenement_prix'];
    // $evenement_nombre_spectateurs = $_POST['evenement_nombre_spectateurs'];


    try {
        if (empty($evenement_id) || $evenement_id == "0") {

            $sql = "INSERT INTO evenements (evenement_nom, evenement_date, evenement_nombre_place, evenement_ville, evenement_prix) VALUES(:evenement_nom, :evenement_date, :evenement_nombre_place, :evenement_ville, :evenement_prix)";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':evenement_nom' => $evenement_nom,
                ':evenement_date' => $evenement_date,
                ':evenement_nombre_place' => $evenement_nombre_place,
                ':evenement_ville' => $evenement_ville,
                ':evenement_prix' => $evenement_prix
            ]);
            var_dump($_POST);
            exit;
            //recupère l'id qu'on vient d'ajouter 
            $evenement_id = $db->lastInsertId();
            $message = "Evenement crée avec succès !";
        } else {
            // modification d'un événement
            $sql = "UPDATE evenements SET
                    evenement_nom = :evenement_nom,
                    evenement_date = :evenement_date,
                    evenement_nombre_place = :evenement_nombre_place,
                    evenement_ville = :evenement_ville,
                    evenement_prix = :evenement_prix
                    WHERE evenement_id = :evenement_id";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':evenement_nom' => $evenement_nom,
                ':evenement_date' => $evenement_date,
                ':evenement_nombre_place' => $evenement_nombre_place,
                ':evenement_ville' => $evenement_ville,
                ':evenement_prix' => $evenement_prix,
                ':evenement_id' => $evenement_id
            ]);

            $message = "Evenement modifié avec succès !";
        }
    } catch (PDOException $e) {
        error_log($e->getMessage());
        $message = "Erreur lors de la création de l'événement.";
        // $message = "Erreur lors de la création de l'événement : " . $e->getMessage();
        // echo $message;
    }
}




require_once $_SERVER['DOCUMENT_ROOT'] . '/../view/admin.html.php';
