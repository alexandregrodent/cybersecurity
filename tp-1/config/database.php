<?php

/**
 * Connexion à la base de données
 */
class Database
{
    private string $host = 'db';
    private string $db_name = 'dvwa';
    private string $username = 'dvwa';
    private string $password = 'password';
    private ?PDO $conn = null;

    /**
     * Obtient la connexion à la base de données
     *
     * @return PDO|null
     */
    public function getConnection(): ?PDO
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        return $this->conn;
    }
}
