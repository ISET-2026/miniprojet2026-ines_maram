<?php

namespace App\Tests\Api;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class RecetteApiTest extends ApiTestCase
{
    public function testGetApiRecettes()

    {

    
        static::createClient()->request('GET', '/api/recettes');

        $this->assertResponseIsSuccessful();

        $this->assertResponseHeaderSame(
            'content-type',
            'application/ld+json; charset=utf-8'
        );
    }

    public function testPostRecetteValide()
    {
        static::createClient()->request('POST', '/api/recettes', [
            'json' => [
                'titre' => 'Burger',
                'description' => 'Très bon'
            ]
        ]);

        $this->assertResponseStatusCodeSame(201);
    }

    public function testPostTitreVide()
    {
        static::createClient()->request('POST', '/api/recettes', [
            'json' => [
                'titre' => '',
                'description' => 'test'
            ]
        ]);

        $this->assertResponseStatusCodeSame(422);
    }
}