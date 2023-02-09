<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="")
     */

    /** 
    * @var Environment
    */
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }
    
    public function index() : Response
    {
        return $this->render('pages/home.html.twig');
    }
}