<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculateController extends AbstractController
{


    public function add($a, $b)
    {
        return $a + $b;
    }
}
