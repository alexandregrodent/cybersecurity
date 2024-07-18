<?php

use PHPUnit\Framework\TestCase;

/**
 * Class IntegrationTest
 */
class IntegrationTest extends TestCase
{
    /**
     * Teste la connexion à la base de données
     */
    public function testDatabaseConnection(): void
    {
        $db = new Database();
        $this->assertNotNull($db->getConnection());
    }
}
