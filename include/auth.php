<?php
// fonction pour savoir si l'utilisateur connecter
function estConnecte(): bool
{
    return isset($_SESSION['utilisateur_id']);
}
function estAdmin(): bool
{
    return estConnecte() && isset($_SESSION['role_id']) && $_SESSION['role_id'] === 1;
}
