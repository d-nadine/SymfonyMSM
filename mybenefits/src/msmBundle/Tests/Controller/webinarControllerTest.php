<?php

namespace msmBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class webinarControllerTest extends WebTestCase
{
    public function testListwebinar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'list-webinar');
    }

    public function testCreatewebinar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'create-webinar');
    }

    public function testViewwebinar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'view-webinar');
    }

}
