<?php

namespace Application\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopBundle\Entity\Transaction;
use Application\ShopBundle\Form\CheckoutType;

use Application\ShopBundle\Entity\ProductTransaction;

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
            
            $session = $this->getRequest()->getSession();
            $products = $session->get('product_cart');

            $transaction_quantity = null;
            $transaction_subtotal = null;
            
            foreach ($products as $product) {
                $p = $em->getRepository('ApplicationShopBundle:Product')->find($product['id']);

                $product_transaction = new ProductTransaction();
                $product_transaction->setProduct($p);
                $product_transaction->setTransaction($entity);
                $product_transaction->setQuantity($product['quantity']);
                
                $em->persist($product_transaction);
                
                $transaction_quantity += $product['quantity'];
                $transaction_subtotal += $product['subtotal'];
            }
            
            $entity->setQuantity($transaction_quantity);
            $entity->setSubtotal($transaction_subtotal);
            $entity->setShippingCost(28);
            $entity->setTotal($transaction_subtotal + $entity->getShippingCost());
            $entity->setStatus(1);
            
            $em->persist($entity);
            $em->flush();
            
            $session->remove('product_cart');
            return $this->redirect($this->generateUrl('application_order_checkout_complete', array('id' => $entity->getId())));
        }

        return $this->render('ApplicationShopBundle:Order:checkout.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function completeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopBundle:Transaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaction entity.');
        }
        
        $repository = $em->getRepository('ApplicationShopBundle:Product');

        $qb = $repository->createQueryBuilder('p')
            ->add('select', 'p, pt, t')
            ->leftJoin('p.transactions', 'pt')
            ->leftJoin('pt.transaction', 't')
            ->where('t.id = :transaction_id')
            ->setParameter('transaction_id', $id);

        $query = $qb->getQuery();
        $products = $query->getResult();
        
        if (!$products) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        
        return $this->render('ApplicationShopBundle:Order:complete.html.twig', array(
            'entity'      => $entity,
            'products'      => $products,
        ));
    }
    
}
