<?php


namespace App\Tests;

use App\Controller\CalculateController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class CalculatorTest extends WebTestCase
{
    public function testAdd()
    {
        $calculator = new CalculateController();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }

}

