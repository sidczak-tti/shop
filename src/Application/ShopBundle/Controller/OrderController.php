<?php

namespace Application\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopBundle\Entity\Transaction;
use Application\ShopBundle\Form\CheckoutType;

class OrderController extends Controller
{
    public function cartAction()
    {
        return $this->render('ApplicationShopBundle:Order:cart.html.twig');
    }
    
    /**
     * Displays a form to create a new Transaction entity.
     *
     */
    public function checkoutAction()
    {
        $entity = new Transaction();
        $form = $this->createCreateForm($entity);
        
        return $this->render('ApplicationShopBundle:Order:checkout.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a form to create a Transaction entity.
     *
     * @param Transaction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Transaction $entity)
    {
        $form = $this->createForm(new CheckoutType(), $entity, array(
            'action' => $this->generateUrl('application_order_checkout_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Submit my orders'));

        return $form;
    }
    
    /**
     * Creates a new Transaction entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Transaction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('application_admin_transaction_show', array('id' => $entity->getId())));
            //return $this->render('ApplicationShopBundle:Order:cart.html.twig');
        }

        return $this->render('ApplicationShopBundle:Order:checkout.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
}
