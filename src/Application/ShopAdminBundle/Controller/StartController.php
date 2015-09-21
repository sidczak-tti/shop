<?php

namespace Application\ShopAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationShopAdminBundle:Start:index.html.twig');
    }
}