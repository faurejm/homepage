<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{    /**
    * @Route("/home/hello")
    */
    public function index()
    {
        $hello = "Hello WCS";

        return $this->render('home.html.twig', [
            'index' => $hello,
        ]);
    }
}