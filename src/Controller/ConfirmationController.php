<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmationController extends AbstractController
{
    /**
     * @Route("/confirmation", name="confirmation"))
     * @return Response
     */
    public function index(){

        return $this->render('confirmation/index.html.twig');

    }
}