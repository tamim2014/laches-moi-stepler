<?php

/**
 * DANS CE FICHIER ON CHERCHE A SUPPRIMER LE COMMENTAIRE DONT L'id EST PASSE EN PARAMETRE GET !
 * 
 * On va donc vérifier que le paramètre "id" est bien présent en GET, qu'il correspond bien à un commentaire existant
 * Puis on le supprimera !
 */

require_once('libraries/autoload.php'); 

$controller = new \Controllers\Comment();
$controller->delete();

