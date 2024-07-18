<?php

require_absolute('config/database.php');

/**
 * Class DatabaseHelper
 */
class DatabaseHelper extends Database
{
    /**
     * Exécute une requête SQL
     *
     * @param string $sql
     * @param array $params
     * @return array
     */
    public function query(string $sql, array $params = []): array
    {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
