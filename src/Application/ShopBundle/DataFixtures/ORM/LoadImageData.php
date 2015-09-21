<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadImageData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\Image;
 
class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	
	    $img_asus_cp6130_1 = new Image();
	    $img_asus_cp6130_1->setProduct($em->merge($this->getReference('product-asus_cp6130')));
	    $img_asus_cp6130_1->setImage('asus_cp6130_1.jpg');
	    $img_asus_cp6130_2 = new Image();
	    $img_asus_cp6130_2->setProduct($em->merge($this->getReference('product-asus_cp6130')));
	    $img_asus_cp6130_2->setImage('asus_cp6130_2.jpg');
	    $img_asus_cp6130_3 = new Image();
	    $img_asus_cp6130_3->setProduct($em->merge($this->getReference('product-asus_cp6130')));
	    $img_asus_cp6130_3->setImage('asus_cp6130_3.jpg');
	    	 
	    $em->persist($img_asus_cp6130_1);
	    $em->persist($img_asus_cp6130_2);
	    $em->persist($img_asus_cp6130_3);
	    
	    $img_asus_cp6230_1 = new Image();
	    $img_asus_cp6230_1->setProduct($em->merge($this->getReference('product-asus_cp6230')));
	    $img_asus_cp6230_1->setImage('asus_cp6230_1.jpg');
	    $img_asus_cp6230_2 = new Image();
	    $img_asus_cp6230_2->setProduct($em->merge($this->getReference('product-asus_cp6230')));
	    $img_asus_cp6230_2->setImage('asus_cp6230_2.jpg');
	    $img_asus_cp6230_3 = new Image();
	    $img_asus_cp6230_3->setProduct($em->merge($this->getReference('product-asus_cp6230')));
	    $img_asus_cp6230_3->setImage('asus_cp6230_3.jpg');
	    	 
	    $em->persist($img_asus_cp6230_1);
	    $em->persist($img_asus_cp6230_2);
	    $em->persist($img_asus_cp6230_3);
	    
	    $img_asus_essentio_cp1130_1 = new Image();
	    $img_asus_essentio_cp1130_1->setProduct($em->merge($this->getReference('product-asus_essentio_cp1130')));
	    $img_asus_essentio_cp1130_1->setImage('asus_essentio_cp1130_1.jpg');
	    $img_asus_essentio_cp1130_2 = new Image();
	    $img_asus_essentio_cp1130_2->setProduct($em->merge($this->getReference('product-asus_essentio_cp1130')));
	    $img_asus_essentio_cp1130_2->setImage('asus_essentio_cp1130_2.jpg');
	    $img_asus_essentio_cp1130_3 = new Image();
	    $img_asus_essentio_cp1130_3->setProduct($em->merge($this->getReference('product-asus_essentio_cp1130')));
	    $img_asus_essentio_cp1130_3->setImage('asus_essentio_cp1130_3.jpg');
	    	 
	    $em->persist($img_asus_essentio_cp1130_1);
	    $em->persist($img_asus_essentio_cp1130_2);
	    $em->persist($img_asus_essentio_cp1130_3);
	    
	    $img_samsung_series3_1 = new Image();
	    $img_samsung_series3_1->setProduct($em->merge($this->getReference('product-samsung_series3')));
	    $img_samsung_series3_1->setImage('samsung_series3_1.jpg');
	    $img_samsung_series3_2 = new Image();
	    $img_samsung_series3_2->setProduct($em->merge($this->getReference('product-samsung_series3')));
	    $img_samsung_series3_2->setImage('samsung_series3_2.jpg');
	    $img_samsung_series3_3 = new Image();
	    $img_samsung_series3_3->setProduct($em->merge($this->getReference('product-samsung_series3')));
	    $img_samsung_series3_3->setImage('samsung_series3_3.jpg');
	    	 
	    $em->persist($img_samsung_series3_1);
	    $em->persist($img_samsung_series3_2);
	    $em->persist($img_samsung_series3_3);
	    
	    $img_samsung_series7_1 = new Image();
	    $img_samsung_series7_1->setProduct($em->merge($this->getReference('product-samsung_series7')));
	    $img_samsung_series7_1->setImage('samsung_series7_1.jpg');
	    $img_samsung_series7_2 = new Image();
	    $img_samsung_series7_2->setProduct($em->merge($this->getReference('product-samsung_series7')));
	    $img_samsung_series7_2->setImage('samsung_series7_2.jpg');
	    $img_samsung_series7_3 = new Image();
	    $img_samsung_series7_3->setProduct($em->merge($this->getReference('product-samsung_series7')));
	    $img_samsung_series7_3->setImage('samsung_series7_3.jpg');
	    	 
	    $em->persist($img_samsung_series7_1);
	    $em->persist($img_samsung_series7_2);
	    $em->persist($img_samsung_series7_3);
	    
	    $img_samsung_series9_1 = new Image();
	    $img_samsung_series9_1->setProduct($em->merge($this->getReference('product-samsung_series9')));
	    $img_samsung_series9_1->setImage('samsung_series9_1.jpg');
	    $img_samsung_series9_2 = new Image();
	    $img_samsung_series9_2->setProduct($em->merge($this->getReference('product-samsung_series9')));
	    $img_samsung_series9_2->setImage('samsung_series9_2.jpg');
	    $img_samsung_series9_3 = new Image();
	    $img_samsung_series9_3->setProduct($em->merge($this->getReference('product-samsung_series9')));
	    $img_samsung_series9_3->setImage('samsung_series9_3.jpg');
	    	 
	    $em->persist($img_samsung_series9_1);
	    $em->persist($img_samsung_series9_2);
	    $em->persist($img_samsung_series9_3);
	    
	    $img_apple_ipad_2_black_1 = new Image();
	    $img_apple_ipad_2_black_1->setProduct($em->merge($this->getReference('product-apple_ipad_2_black')));
	    $img_apple_ipad_2_black_1->setImage('ipad-black-1.jpg');
	    $img_apple_ipad_2_black_2 = new Image();
	    $img_apple_ipad_2_black_2->setProduct($em->merge($this->getReference('product-apple_ipad_2_black')));
	    $img_apple_ipad_2_black_2->setImage('ipad-black-2.jpg');
	    $img_apple_ipad_2_black_3 = new Image();
	    $img_apple_ipad_2_black_3->setProduct($em->merge($this->getReference('product-apple_ipad_2_black')));
	    $img_apple_ipad_2_black_3->setImage('ipad-black-3.jpg');
	    	 
	    $em->persist($img_apple_ipad_2_black_1);
	    $em->persist($img_apple_ipad_2_black_2);
	    $em->persist($img_apple_ipad_2_black_3);
	    
	    $img_apple_ipad_2_white_1 = new Image();
	    $img_apple_ipad_2_white_1->setProduct($em->merge($this->getReference('product-apple_ipad_2_white')));
	    $img_apple_ipad_2_white_1->setImage('ipad-white-1.jpg');
	    $img_apple_ipad_2_white_2 = new Image();
	    $img_apple_ipad_2_white_2->setProduct($em->merge($this->getReference('product-apple_ipad_2_white')));
	    $img_apple_ipad_2_white_2->setImage('ipad-white-2.jpg');
	    $img_apple_ipad_2_white_3 = new Image();
	    $img_apple_ipad_2_white_3->setProduct($em->merge($this->getReference('product-apple_ipad_2_white')));
	    $img_apple_ipad_2_white_3->setImage('ipad-white-3.jpg');
	    	 
	    $em->persist($img_apple_ipad_2_white_1);
	    $em->persist($img_apple_ipad_2_white_2);
	    $em->persist($img_apple_ipad_2_white_3);
	    
	    $img_samsung_galaxy_tab7_0_1 = new Image();
	    $img_samsung_galaxy_tab7_0_1->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab7_0')));
	    $img_samsung_galaxy_tab7_0_1->setImage('samsung_galaxy_tab7_0_1.jpg');
	    $img_samsung_galaxy_tab7_0_2 = new Image();
	    $img_samsung_galaxy_tab7_0_2->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab7_0')));
	    $img_samsung_galaxy_tab7_0_2->setImage('samsung_galaxy_tab7_0_2.jpg');
	    $img_samsung_galaxy_tab7_0_3 = new Image();
	    $img_samsung_galaxy_tab7_0_3->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab7_0')));
	    $img_samsung_galaxy_tab7_0_3->setImage('samsung_galaxy_tab7_0_3.jpg');
	    	 
	    $em->persist($img_samsung_galaxy_tab7_0_1);
	    $em->persist($img_samsung_galaxy_tab7_0_2);
	    $em->persist($img_samsung_galaxy_tab7_0_3);
	    
	    $img_samsung_galaxy_tab8_9_1 = new Image();
	    $img_samsung_galaxy_tab8_9_1->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab8_9')));
	    $img_samsung_galaxy_tab8_9_1->setImage('samsung_galaxy_tab8_9_1.jpg');
	    $img_samsung_galaxy_tab8_9_2 = new Image();
	    $img_samsung_galaxy_tab8_9_2->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab8_9')));
	    $img_samsung_galaxy_tab8_9_2->setImage('samsung_galaxy_tab8_9_2.jpg');
	    $img_samsung_galaxy_tab8_9_3 = new Image();
	    $img_samsung_galaxy_tab8_9_3->setProduct($em->merge($this->getReference('product-samsung_galaxy_tab8_9')));
	    $img_samsung_galaxy_tab8_9_3->setImage('samsung_galaxy_tab8_9_3.jpg');
	    	 
	    $em->persist($img_samsung_galaxy_tab8_9_1);
	    $em->persist($img_samsung_galaxy_tab8_9_2);
	    $em->persist($img_samsung_galaxy_tab8_9_3);
	    
	    
	    $em->flush();
	 
	    //$this->addReference('image-asus_cp6130', $img_asus_cp6130);

    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}