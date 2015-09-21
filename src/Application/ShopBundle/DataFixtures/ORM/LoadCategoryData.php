<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadCategoryData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\Category;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
	    $desktops = new Category();
	    $desktops->setTitle('Desktops');
	    $desktops->setDescription('Desktops Description');
	    $desktops->setImage('desktops.jpg');
	    $desktops->setIsActive(1);
	    
	    $laptops = new Category();
	    $laptops->setTitle('Laptops');
	    $laptops->setDescription('Laptops Description');
	    $laptops->setImage('laptops.jpg');
	    $laptops->setIsActive(1);
	    
	    $tablets = new Category();
	    $tablets->setTitle('Tablets');
	    $tablets->setDescription('Tablets Description');
	    $tablets->setImage('tablets.jpg');
	    $tablets->setIsActive(1);
	    
	    $cell_phones = new Category();
	    $cell_phones->setTitle('Cell Phones');
	    $cell_phones->setDescription('Cell Phones Description');
	    $cell_phones->setImage('cell-phones.jpg');
	    $cell_phones->setIsActive(1);
	    	 
	    $em->persist($desktops);
	    $em->persist($laptops);
	    $em->persist($tablets);
	    $em->persist($cell_phones);
	 
	    $em->flush();
	 
	    $this->addReference('category-desktops', $desktops);
	    $this->addReference('category-laptops', $laptops);
	    $this->addReference('category-tablets', $tablets);
	    $this->addReference('category-cell_phones', $cell_phones);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}