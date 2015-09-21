<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadUserData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\User;
 
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$grzegorz = new User();
        $grzegorz->setName('Grzegorz');
        $grzegorz->setEmail('grzegorz@test.pl');
        
        $stanislaw = new User();
        $stanislaw->setName('Stanisław');
        $stanislaw->setEmail('stanislaw@test.pl');
        
        $krzysztof = new User();
        $krzysztof->setName('Krzysztof');
        $krzysztof->setEmail('krzysztof@test.pl');

	    $em->persist($grzegorz);
	    $em->persist($stanislaw);
	    $em->persist($krzysztof);
	 
	    $em->flush();
        
        $this->addReference('user-grzegorz', $grzegorz);
        $this->addReference('user-stanislaw', $stanislaw);
        $this->addReference('user-krzysztof', $krzysztof);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}