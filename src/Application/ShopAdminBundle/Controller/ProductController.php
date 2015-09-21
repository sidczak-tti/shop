<?php

namespace Application\ShopAdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ShopAdminBundle\Entity\Product;
use Application\ShopAdminBundle\Form\ProductType;

use Application\ShopAdminBundle\Entity\Image;

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
    public function indexAction($page, $sort_col, $sort_type)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ApplicationShopAdminBundle:Product')->findAll();
        
		$total_products = count($entities);
		$products_per_page = 8;
		
		$last_page = ceil($total_products / $products_per_page);
		$previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        
        
		$entities = $em->getRepository('ApplicationShopAdminBundle:Product');
		
        $session = $this->getRequest()->getSession();

    	if($sort_col == 'reset'){
		    $sort_col = null;
		    $sort_type = null;
    		$session->remove('sc');
	        $session->remove('st');
		}

		if($sort_col == null && $session->get('sc')){
			$sort_col = $session->get('sc');
	        $sort_type = $session->get('st');
		} else {
		    $session->set('sc', $sort_col);
	        $session->set('st', $sort_type);
		}
		
		$q = $entities->createQueryBuilder('p')
	        ->setMaxResults($products_per_page)
	        ->setFirstResult(($page - 1) * $products_per_page);
        
	    if($sort_col)
        {
            $q->orderBy('p.'.$sort_col, $sort_type);
        }
        
		$query = $q->getQuery();
		
		$entities = $query->getResult();

        return $this->render('ApplicationShopAdminBundle:Product:index.html.twig', array(
            'entities' => $entities,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
        	'total_products' => $total_products,
        	'sort_col' => $sort_col,
        	'sort_type' => $sort_type,
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
        	
	        if ($entity->getFile()) {
	            
	        	$entity->setFileRename();
	            
	            $img = new Image();
        		//$img->setImage($entity->getFile()->getClientOriginalName());
	            $img->setImage($entity->getFileRename());
        		$img->setProduct($entity);
        		$em->persist($img);
        	}
        	
        	//$entity->upload();
        	
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('application_admin_product_show', array('id' => $entity->getId())));
        }

        return $this->render('ApplicationShopAdminBundle:Product:new.html.twig', array(
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
            'action' => $this->generateUrl('application_admin_product_create'),
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

        return $this->render('ApplicationShopAdminBundle:Product:new.html.twig', array(
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

        $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationShopAdminBundle:Product:show.html.twig', array(
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

        $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ApplicationShopAdminBundle:Product:edit.html.twig', array(
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
            'action' => $this->generateUrl('application_admin_product_update', array('id' => $entity->getId())),
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

        $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
        	
        	if ($entity->getFile()) {
	            
	        	$entity->setFileRename();
	            
	            $img = new Image();
	            //$img->setImage($entity->getFile()->getClientOriginalName());
        		$img->setImage($entity->getFileRename());
        		$img->setProduct($entity);
        		$em->persist($img);
        	}
        	
            $em->flush();

            return $this->redirect($this->generateUrl('application_admin_product_edit', array('id' => $id)));
        }

        return $this->render('ApplicationShopAdminBundle:Product:edit.html.twig', array(
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
            $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('application_admin_product'));
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
            ->setAction($this->generateUrl('application_admin_product_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function statusAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        if(!$entity->getIsActive()) {
	      $entity->setIsActive(true);
	      //$entity->save();
	    }
	    else {
	      $entity->setIsActive(false);
	      //$entity->save();
	    }
        
	    //!$entity->getIsActive() ? $entity->setIsActive(true) : $entity->setIsActive(false);
	    
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('application_admin_product'));
    }
    
    public function removeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopAdminBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect($this->generateUrl('application_admin_product'));
    }
    
    public function removeImageAction(Request $request, $id, $img)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApplicationShopAdminBundle:Image')->find($img);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect($this->generateUrl('application_admin_product_edit', array('id' => $id)));
    }
    
}
