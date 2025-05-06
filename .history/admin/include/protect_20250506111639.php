    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";

    session_start();
    var_dump($_SESSION);
    exit();
    if (!isset($_SESSION['is_logged']) || $_SESSION['role_id'] != 2 "L'utilisateur est bien authentifié.") {
        redirect("events.php");
    }
