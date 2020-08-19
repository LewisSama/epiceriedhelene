<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValidationController extends AbstractController
{
    /**
     * @Route("/confirmation")
     * @return Response
     */
    public function index(){

        return $this->render('confirmation/index.html.twig');

    }
}