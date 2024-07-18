<?php

use PHPUnit\Framework\TestCase;

/**
 * Class FunctionalTest
 */
class FunctionalTest extends TestCase
{
    /**
     * Teste la page d'accueil
     */
    public function testHomePage(): void
    {
        $url = 'http://localhost/dvwa/index.php';
        $response = file_get_contents($url);
        $this->assertStringContainsString('Welcome to DVWA', $response);
    }
}
