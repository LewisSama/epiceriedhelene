<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/magasin", name="shop_index")
     * @return Response
     */
    public function index(){

        return $this->render('shop/index.html.twig');

    }
}