<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadTransactionData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\Transaction;
 
class LoadTransactionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$transaction1 = new Transaction();
    	$transaction1->setUser($em->merge($this->getReference('user-grzegorz')));
    	$transaction1->addProduct($em->merge($this->getReference('product-asus_cp6130')));
        $transaction1->setShippingAddress('ul. Andrykowskiego 4, 86-150 Osie');
        $transaction1->setBillingAddress('ul. Andrykowskiego 4, 86-150 Osie');
        $transaction1->setQuantity(1);
        $transaction1->setStatus(1);
        
        $transaction2 = new Transaction();
    	$transaction2->setUser($em->merge($this->getReference('user-stanislaw')));
    	$transaction2->addProduct($em->merge($this->getReference('product-asus_cp6130')));
    	$transaction2->addProduct($em->merge($this->getReference('product-samsung_series3')));
        $transaction2->setShippingAddress('ul. Andrykowskiego 5, 86-150 Osie');
        $transaction2->setBillingAddress('ul. Andrykowskiego 5, 86-150 Osie');
        $transaction2->setQuantity(2);
        $transaction2->setStatus(1);
        
        $transaction3 = new Transaction();
    	$transaction3->setUser($em->merge($this->getReference('user-krzysztof')));
    	$transaction3->addProduct($em->merge($this->getReference('product-asus_cp6130')));
    	$transaction3->addProduct($em->merge($this->getReference('product-samsung_series3')));
        $transaction3->setShippingAddress('ul. Andrykowskiego 6, 86-150 Osie');
        $transaction3->setBillingAddress('ul. Andrykowskiego 6, 86-150 Osie');
        $transaction3->setQuantity(2);
        $transaction3->setStatus(1);
        
        $em->persist($transaction1);
        $em->persist($transaction2);
        $em->persist($transaction3);
	 
	    $em->flush();
	    /*
	    $this->addReference('transaction-transaction1', $transaction1);
	    $this->addReference('transaction-transaction2', $transaction2);
	    $this->addReference('transaction-transaction3', $transaction3);
	    */
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}