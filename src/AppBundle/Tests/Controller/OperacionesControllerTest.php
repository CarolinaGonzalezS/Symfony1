<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OperacionesControllerTest extends WebTestCase
{
    public function testSuma()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operaciones/suma');
    }

    public function testResta()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operaciones/resta');
    }

    public function testMultiplicacion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operaciones/multiplicacion');
    }

    public function testDivision()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operaciones/division');
    }

}
