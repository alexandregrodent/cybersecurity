<?php

/**
 * Inclut un fichier en utilisant un chemin absolu basé sur la racine du projet.
 *
 * @param string $path Chemin relatif du fichier à inclure.
 * @return void
 */
function require_absolute(string $path): void
{
    $basePath = dirname(__DIR__, 2); // Deux niveaux au-dessus du dossier `helpers`
    $fullPath = $basePath . DIRECTORY_SEPARATOR . $path;

    if (file_exists($fullPath)) {
        require_once $fullPath;
    } else {
        die("Le fichier requis n'existe pas : $fullPath");
    }
}
