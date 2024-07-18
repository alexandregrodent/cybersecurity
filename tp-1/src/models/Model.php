<?php

/**
 * Class Model
 */
class Model
{
    private PDO $conn;

    /**
     * Model constructor.
     *
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    /**
     * Récupère les données de la base de données
     *
     * @return array
     */
    public function getData(): array
    {
        $query = "SELECT * FROM example_table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

