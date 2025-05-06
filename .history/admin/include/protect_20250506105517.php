    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";

    session_start();
    var_dump($_SESSION);
    exit();
    if (!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] != "L'utilisateur est bien authentifié.") {
        redirect("login.php");
    }
