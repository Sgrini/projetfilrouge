<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/function.php";

session_start();
if (!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] != 1 "Le coach est bien authentifié.") {
    redirect("admin.php");
}
