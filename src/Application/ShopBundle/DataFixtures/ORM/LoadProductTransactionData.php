<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadProductTransactionData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\ProductTransaction;
 
class LoadProductTransactionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$product_transaction1 = new ProductTransaction();
    	$product_transaction1->setProduct($em->merge($this->getReference('product-asus_cp6130')));
        $product_transaction1->setTransaction($em->merge($this->getReference('transaction-transaction1')));
        $product_transaction1->setQuantity(1);
        
        $product_transaction2 = new ProductTransaction();
    	$product_transaction2->setProduct($em->merge($this->getReference('product-asus_cp6130')));
        $product_transaction2->setTransaction($em->merge($this->getReference('transaction-transaction2')));
        $product_transaction2->setQuantity(2);
        
        $product_transaction3 = new ProductTransaction();
    	$product_transaction3->setProduct($em->merge($this->getReference('product-samsung_series3')));
        $product_transaction3->setTransaction($em->merge($this->getReference('transaction-transaction2')));
        $product_transaction3->setQuantity(2);
        
        $product_transaction4 = new ProductTransaction();
    	$product_transaction4->setProduct($em->merge($this->getReference('product-asus_cp6130')));
        $product_transaction4->setTransaction($em->merge($this->getReference('transaction-transaction3')));
        $product_transaction4->setQuantity(2);
        
        $product_transaction5 = new ProductTransaction();
    	$product_transaction5->setProduct($em->merge($this->getReference('product-samsung_series3')));
        $product_transaction5->setTransaction($em->merge($this->getReference('transaction-transaction3')));
        $product_transaction5->setQuantity(1);
        
        $em->persist($product_transaction1);
        $em->persist($product_transaction2);
        $em->persist($product_transaction3);
        $em->persist($product_transaction4);
        $em->persist($product_transaction5);
	 
	$em->flush();
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}