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
    	#$transaction1->addProduct($em->merge($this->getReference('product-asus_cp6130')));
        $transaction1->setCompany('Energa SA');
        $transaction1->setEmail('energa@xx.com');
        $transaction1->setBillingFirstname('Jan');
        $transaction1->setBillingLastname('Kowalski');
        $transaction1->setBillingPhone('xxx xx xx xx');
        $transaction1->setBillingFax('(xxx) xxx-xx-xx');
        $transaction1->setBillingAddress('ul. Nowy świat 4');
        #$transaction1->setBillingAddress();
        $transaction1->setBillingCity('Gdynia');
        $transaction1->setBillingCountry('Polska');
        $transaction1->setBillingZipcode('85-200');
        $transaction1->setShippingAddress('ul. Andrykowskiego 4, 86-150 Osie');
        $transaction1->setQuantity(1);
        $transaction1->setStatus(1);
        
        $transaction2 = new Transaction();
    	$transaction2->setUser($em->merge($this->getReference('user-stanislaw')));
    	#$transaction2->addProduct($em->merge($this->getReference('product-asus_cp6130')));
    	#$transaction2->addProduct($em->merge($this->getReference('product-samsung_series3')));
        $transaction2->setCompany('Energa SA');
        $transaction2->setEmail('energa@xx.com');
        $transaction2->setBillingFirstname('Jan');
        $transaction2->setBillingLastname('Kowalski');
        $transaction2->setBillingPhone('xxx xx xx xx');
        $transaction2->setBillingFax('(xxx) xxx-xx-xx');
        $transaction2->setBillingAddress('ul. Nowy świat 4');
        $transaction2->setBillingCity('Gdynia');
        $transaction2->setBillingCountry('Polska');
        $transaction2->setBillingZipcode('85-200');
        $transaction2->setShippingAddress('ul. Andrykowskiego 5, 86-150 Osie');
        $transaction2->setQuantity(2);
        $transaction2->setStatus(1);
        
        $transaction3 = new Transaction();
    	$transaction3->setUser($em->merge($this->getReference('user-krzysztof')));
    	#$transaction3->addProduct($em->merge($this->getReference('product-asus_cp6130')));
    	#$transaction3->addProduct($em->merge($this->getReference('product-samsung_series3')));
        $transaction3->setCompany('Energa SA');
        $transaction3->setEmail('energa@xx.com');
        $transaction3->setBillingFirstname('Jan');
        $transaction3->setBillingLastname('Kowalski');
        $transaction3->setBillingPhone('xxx xx xx xx');
        $transaction3->setBillingFax('(xxx) xxx-xx-xx');
        $transaction3->setBillingAddress('ul. Nowy świat 4');
        $transaction3->setBillingCity('Gdynia');
        $transaction3->setBillingCountry('Polska');
        $transaction3->setBillingZipcode('85-200');
        $transaction3->setShippingAddress('ul. Andrykowskiego 6, 86-150 Osie');
        $transaction3->setQuantity(2);
        $transaction3->setStatus(1);
        
        $em->persist($transaction1);
        $em->persist($transaction2);
        $em->persist($transaction3);
	 
        $em->flush();
	
        $this->addReference('transaction-transaction1', $transaction1);
        $this->addReference('transaction-transaction2', $transaction2);
        $this->addReference('transaction-transaction3', $transaction3);
	
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}