<?php

namespace xtm\website\utils;

function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


function formatFrenchPhoneNumber($phoneNumber, $international = False)
{
    //Supprime tous les caractères qui ne sont pas des chiffres
    $phoneNumber = preg_replace('/[^0-9]+/', '', $phoneNumber);
    //Garde les 9 derniers chiffres
    $phoneNumber = substr($phoneNumber, -9);
    //On ajoute +33 si la variable $international vaut true et 0 dans tous les autres cas
    $motif = $international ? '+33 \1 \2 \3 \4 \5' : '0\1 \2 \3 \4 \5';
    $phoneNumber = preg_replace('/(\d{1})(\d{2})(\d{2})(\d{2})(\d{2})/', $motif, $phoneNumber);

    return $phoneNumber;
}

function isAjaxRequest()
{
    return (!empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XmlHttpRequest");
    return true;
}
