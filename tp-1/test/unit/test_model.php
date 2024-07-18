<?php

use PHPUnit\Framework\TestCase;

/**
 * Class ModelTest
 */
class ModelTest extends TestCase
{
    /**
     * Teste la récupération des données
     */
    public function testGetData(): void
    {
        $db = new PDO("mysql:host=localhost;dbname=dvwa", "dvwa", "password");
        $model = new Model($db);
        $data = $model->getData();
        $this->assertNotEmpty($data);
    }
}
