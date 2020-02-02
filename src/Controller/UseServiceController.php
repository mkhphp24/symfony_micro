<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\GitService;
use Exception;
class UseServiceController extends AbstractController
{
    /**
     * @Route("/useservice/index/", name="use_service_index")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UseServiceController.php',
        ]);
    }

    /**
     * @Route("/useservice/{username}", name="useservice")
     */
    public function useService( GitService $gitService,$username){
        try {
            $userdata = $gitService->getuser($username);
            return $this->json($userdata);
        } catch (Exception $exception) {


            return $this->render('error.html.twig', [
                "error_title" => "Error #{$exception->getCode()}",
                "error_description" => $exception->getMessage(),
            ]);
        }
    }

    //===============================================
    /**
     * @Route("/useserviceEx/{username}", name="useserviceEx")
     */
    public function useServiceEx( GitService $gitService,$username){
        try {
            $userdata = $gitService->getuser($username);
            return $this->json($userdata);
        } catch (Exception $exception) {

            return $this->json( $exception->getCode());
        }
    }
}
