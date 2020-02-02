<?php


namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UseServiceTest extends  WebTestCase
{


    public function setUp()
    {

    }

    //============================
    public function testGetService()
    {
        $client = static::createClient();
        $client->request('GET', '/useservice/mkhphp24'); //http://127.0.0.1:8001/useservice
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    //========================================
    public function testGetServiceNotAvailabel()
    {
        $client = static::createClient();
        $client->request('GET', '/useserviceEx/mkhphp24ggggggggggg'); //http://127.0.0.1:8001/useservice
        $this->assertEquals(404, $client->getResponse()->getContent());
    }
    //========================================

    public function tearDown()
    {
        parent::tearDown();

    }

}
