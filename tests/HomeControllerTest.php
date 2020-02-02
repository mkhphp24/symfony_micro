<?php


namespace App\Tests;
use App\Controller\HomeController;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $a = $this->getMockBuilder(HomeController::class)
            ->setMethods(null)
            ->disableOriginalConstructor()
            ->getMock();


        $this->assertEquals(3, $a->add(1,2));
    }
}
