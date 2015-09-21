<?php

namespace Application\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{
	
    public function showAction($slug, $page)
    {
        $em = $this->getDoctrine()->getManager();
 
        $category = $em->getRepository('ApplicationShopBundle:Category')->findOneBySlug($slug);
 
        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }
        
        $total_products = $em->getRepository('ApplicationShopBundle:Product')->countProductsFromCategory($category->getId());
        $products_per_page = 2;
        $last_page = ceil($total_products / $products_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
 
        //$category->setActiveProducts($em->getRepository('ApplicationShopBundle:Product')->getProductsFromCategory($category->getId()));
        $category->setActiveProducts($em->getRepository('ApplicationShopBundle:Product')->getProductsFromCategory($category->getId(), $products_per_page, ($page - 1) * $products_per_page));
 
        return $this->render('ApplicationShopBundle:Category:show.html.twig', array(
            'category' => $category,
        	'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_products' => $total_products,
        ));
    }
	
}