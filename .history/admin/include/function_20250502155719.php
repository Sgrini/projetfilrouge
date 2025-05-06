<?php
// FONCTION DE REDIRECTION DE L UTILISATEUR
function redirect($path)
{
    header("Location:" . $path);
    // Le exit sert à stopper l'éxécution du potentiel code non désiré 
    exit();
}
function hsc($string) {
    return $string 
}
