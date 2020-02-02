<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

//=============================
use GuzzleHttp;
use GuzzleHttp\Exception\RequestException;

class HomeController extends AbstractController
{

    private  $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;

    }
    /**
     * @Route("/", name="home")
     */
    public function index(ParameterBagInterface $params)
    {

        dump($params->all());

        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/user', [
            'auth' => ['mkhphp24', 'km14996162']
        ]);
        echo '<hr>'.$res->getStatusCode();
// "200"
        echo '<hr>'.$res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
        echo '<hr>'.$res->getBody().'<hr>';

       $responses=$client->request('GET', 'http://httpbin.org/image/png');
       echo $responses->getHeader('content-type')[0];



        $this->logger->info("dddddd");



        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
            'config_get'=>$params->get('number_of_items')
        ]);
    }

    /*
     *
     */
    public function add($a, $b)
    {
        return $a + $b;
    }


}
