<?php

namespace msmBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class msmSessionControllerTest extends WebTestCase
{
    public function testCreatesession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'create-session');
    }

    public function testListsessions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'list-sessions');
    }

    public function testMsmsession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'msm-session');
    }

    public function testCreatetoken()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'create-token');
    }

    public function testDeletesession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'delete-session');
    }

    public function testUpdatesession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'update-session');
    }

}
