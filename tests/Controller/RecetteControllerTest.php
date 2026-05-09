<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RecetteControllerTest extends WebTestCase
{
    public function testPageRecettes()
    {
        $client = static::createClient();
        

        $client->request('GET', '/recettes');


        $this->assertResponseStatusCodeSame(200);
    }

    public function testPageContientCards()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recettes');

        $this->assertGreaterThan(
            0,
            $crawler->filter('.card')->count()
        );
    }

    public function testNouvelleRecetteSansLogin()
    {
        $client = static::createClient();

        $client->request('GET', '/recettes/nouvelle');

        $this->assertResponseStatusCodeSame(302);
    }
}