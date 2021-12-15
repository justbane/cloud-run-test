<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController {
    
    public function home(): Response {
        // add stuff here
        return $this->render("default/home.html.twig", ["testing" => "Hello from the controller"]);
    }
}