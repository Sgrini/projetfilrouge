<?php
// FONCTION DE REDIRECTION DE L UTILISATEUR
function redirect($path)
{
    header("Location:" . $path);

    exit();
}
