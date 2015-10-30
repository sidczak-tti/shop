<?php

namespace Application\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopBundle\Entity\Product;
use Application\ShopBundle\Form\ProductType;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{

    /**
     * Lists all Product entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('ApplicationShopBundle:Product')->findAll();

        $categories = $em->getRepository('ApplicationShopBundle:Category')->getWithProducts();
        
        foreach($categories as $category)
        {
          $category->setActiveProducts($em->getRepository('ApplicationShopBundle:Product')->getProductsFromCategory($category->getId(), 2));
        }
        
        return $this->render('ApplicationShopBundle:Product:index.html.twig', array(
            //'entities' => $entities,
            'categories' => $categories,
        ));
    }
    /**
     * Creates a new Product entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Product();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('application_product_show', array('id' => $entity->getId())));
        }

        return $this->render('ApplicationShopBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('application_product_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Product entity.
     *
     */
    public function newAction()
    {
        $entity = new Product();
        $form   = $this->createCreateForm($entity);

        return $this->render('ApplicationShopBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Product entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        $session = $this->getRequest()->getSession();
 
	    // fetch products already stored in the job history
	    $products = $session->get('product_history', array());
	 
	    // store the job as an array so we can put it in the session and avoid entity serialize errors
	    $product = array(
	    	'id' => $entity->getId(), 
	    	'title' =>$entity->getTitle(), 
	    	'titleslug' => $entity->getTitleSlug(), 
	    );
	 
	    if (!in_array($product, $products)) {
	        // add the current job at the beginning of the array
	        array_unshift($products, $product);
	 
	        // store the new job history back into the session
	        $session->set('product_history', array_slice($products, 0, 3));
	    }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationShopBundle:Product:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Product entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationShopBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Product entity.
    *
    * @param Product $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('application_product_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Product entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('application_product_edit', array('id' => $id)));
        }

        return $this->render('ApplicationShopBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Product entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ApplicationShopBundle:Product')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('application_product'));
    }

    /**
     * Creates a form to delete a Product entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('application_product_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function addCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        $session = $this->getRequest()->getSession();
 
	$products = $session->get('product_cart', array());
	
        $product = array(
            'id' => $entity->getId(), 
            'title' => $entity->getTitle(), 
            'titleslug' => $entity->getTitleSlug(),
            'price' => $entity->getPrice(),
            'quantity' => 1,
            'subtotal' => $entity->getPrice(),
        );

        $key_product = null;
        $key_cart = null;
        
        foreach($products as $key => $val) {
            if ($val['id'] == $id) {
                $key_product = $val['id'];
                $key_cart = $key;
            }
        }
        
        if (!$key_product) {
            //echo 'Dodano nowy produkt do koszyka';
            array_unshift($products, $product);
            $session->set('product_cart', $products);
            //var_dump($products);
            //exit;
        } else {
            $products[$key_cart]['quantity']++;
            $products[$key_cart]['subtotal'] = $products[$key_cart]['quantity'] * $products[$key_cart]['price'];
            $session->set('product_cart', $products);
            //var_dump($products);
            //exit;
        }
        
        return $this->redirect($this->generateUrl('application_order_cart'));
    }
    
    public function removeCartAction($id)
    {
        $session = $this->getRequest()->getSession();
 
	$products = $session->get('product_cart', array());

        $key_cart = null;
        
        foreach($products as $key => $val) {
            if ($val['id'] == $id) {
                $key_cart = $key;
            }
        }
        
        if (isset($key_cart)) {
            unset($products[$key_cart]);
            $session->set('product_cart', $products);
        }
        
        if (empty($products)) {
            //$session->invalidate('product_cart');
            $session->remove('product_cart');
        }
        
        return $this->redirect($this->generateUrl('application_order_cart'));
    }
    
    public function updateCartAction()
    {
        $product_quantities = $this->getRequest()->get('product_quantities');
        
        $session = $this->getRequest()->getSession();
        
	$products = $session->get('product_cart', array());
        
        foreach($products as $key => $val) {

            if ($products[$key]['id'] == key($product_quantities['id']) && 
                    $product_quantities['id'][$val['id']] === '0') {
                
                unset($products[$key]);
                
            } else if ($products[$key]['id'] == key($product_quantities['id']) && 
                    preg_match('/^[0-9]+$/', $product_quantities['id'][$val['id']])) {
                
                $products[$key]['quantity'] = abs($product_quantities['id'][$val['id']]);
                $products[$key]['subtotal'] = $products[$key]['quantity'] * $products[$key]['price'];
                
            }

            next($product_quantities['id']);
            
            /*
            if (in_array(key($product_quantities['id']), $products[$key]) &&
                    preg_match('/^[0-9]+$/', $product_quantities['id'][$val['id']])) {
                
            }
            next($product_quantities['id']);*/
            /*
            if (preg_match('/^[0-9]+$/', $product_quantities['id'][$val['id']])) {
                $products[$key]['quantity'] = $product_quantities['id'][$val['id']];
                $products[$key]['subtotal'] = $products[$key]['quantity'] * $products[$key]['price'];
                
                $session->set('product_cart', $products);
            }*/
        }
        
        $session->set('product_cart', $products);
        
        return $this->redirect($this->generateUrl('application_order_cart'));
    }

}
