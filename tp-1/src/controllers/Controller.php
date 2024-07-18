<?php

/**
 * Class Controller
 */
class Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function home(): void
    {
        require '../src/views/home.php';
    }

    /**
     * Gère les vulnérabilités
     *
     * @param string $type
     */
    public function vulnerability(string $type): void
    {
        switch ($type) {
            case 'sqli':
                require '../src/views/vulnerabilities/sqli.php';
                break;
            default:
                $this->error();
                break;
        }
    }

    /**
     * Affiche la page d'erreur
     */
    public function error(): void
    {
        require '../src/views/error.php';
    }
}

