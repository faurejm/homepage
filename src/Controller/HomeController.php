<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $hello = "Hello WCS";

        return $this->render('home.html.twig', [
            'index' => $hello,
        ]);
    }
}