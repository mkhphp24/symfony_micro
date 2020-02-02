<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UseJsonResponsController extends AbstractController
{
    /**
     * @Route("/jsonRespons/index", name="use_json_respons")
     */
    public function index()
    {
        return $this->render('use_json_respons/index.html.twig', [
            'controller_name' => 'UseJsonResponsController',
        ]);
    }

    /**
     * @Route("/json_respons", name="jsonRespons")
     */
    public function jsonRespons(){

        return new JsonResponse([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);

    }

    /**
     * @Route("/site_respons/{id}", name="site_respons" ,  methods={"GET"})
     */
    public function siteRespons(Request $request,$id){
        $request->query->all();

        return $this->render('use_json_respons/index.html.twig', [
            'controller_name' => $request->query->all(),
        ]);

    }
}
