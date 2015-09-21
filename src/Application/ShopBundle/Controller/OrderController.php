<?php

namespace Application\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrderController extends Controller
{
    public function cartAction()
    {
        return $this->render('ApplicationShopBundle:Order:cart.html.twig');
    }
    
	public function checkoutAction()
    {
        return $this->render('ApplicationShopBundle:Order:checkout.html.twig');
    }
}
