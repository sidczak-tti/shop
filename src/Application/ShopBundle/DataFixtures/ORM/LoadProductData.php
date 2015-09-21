<?php
//src/Application/ShopBundle/DataFixtures/ORM/LoadProductData.php

namespace Application\ShopBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Application\ShopBundle\Entity\Product;
 
class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$asus_cp6130 = new Product();
    	$asus_cp6130->setCategory($em->merge($this->getReference('category-desktops'))); //manyToOne
    	//$asus_cp6130->addCategory($em->merge($this->getReference('category-desktops'))); //manyToMany
    	//$asus_cp6130->addCategory($em->merge($this->getReference('category-laptops'))); //manyToMany
	    $asus_cp6130->setTitle('ASUS CP6130');
	    $asus_cp6130->setCode('K02149B2ZX');
	    $asus_cp6130->setPrice(972);
	    $asus_cp6130->setPricePromotion(600);
	    $asus_cp6130->setAmount(10);
	    $asus_cp6130->setDescription('<p>ASUS CP6130 Description</p>');
	    $asus_cp6130->setDescriptionFull('<p>A glossy surface givess the CP6130 an air of elegance, while and an eye-catching power button inspired from the halo of a lunar eclipse seamlessly blends in to the front of the case.</p>');
	    $asus_cp6130->setIsActive(1);
	    
	    $asus_cp6230 = new Product();
	    $asus_cp6230->setCategory($em->merge($this->getReference('category-desktops')));
	    //$asus_cp6230->addCategory($em->merge($this->getReference('category-desktops'))); //manyToMany
	    $asus_cp6230->setTitle('ASUS CP6230');
	    $asus_cp6230->setCode('H0217E3OE9');
	    $asus_cp6230->setPrice(610.99);
	    $asus_cp6230->setPricePromotion(599.99);
	    $asus_cp6230->setAmount(10);
	    $asus_cp6230->setDescription('<p>ASUS CP6230 Description</p>');
	    $asus_cp6230->setDescriptionFull('<p>The ASUS CP6230 features a space-saving design with a hexagonal pattern lid that easily fits anywhere in your home. It draws you in with its elegant aesthetics but holds your attention with its computer power to tackle any task.</p>');
	    $asus_cp6230->setIsActive(1);
	    
	    $asus_essentio_cp1130 = new Product();
	    $asus_essentio_cp1130->setCategory($em->merge($this->getReference('category-desktops')));
	    //$asus_essentio_cp1130->addCategory($em->merge($this->getReference('category-desktops'))); //manyToMany
	    $asus_essentio_cp1130->setTitle('ASUS Essentio CP1130');
	    $asus_essentio_cp1130->setCode('B0218UO9WS');
	    $asus_essentio_cp1130->setPrice(459.99);
	    $asus_essentio_cp1130->setAmount(15);
	    $asus_essentio_cp1130->setDescription('<p>ASUS Essentio CP1130 Description</p>');
	    $asus_essentio_cp1130->setDescriptionFull('<p>The ASUS new Essentio CP1130 has sleek appearance and small size make it perfectly fit anywhere in your home. At the same time, it provides complete function and delivers ultimate performance for daily computing.</p>');
	    $asus_essentio_cp1130->setIsActive(1);
	    
	    $samsung_series3 = new Product();
	    $samsung_series3->setCategory($em->merge($this->getReference('category-laptops')));
	    //$samsung_series3->addCategory($em->merge($this->getReference('category-laptops'))); //manyToMany
	    $samsung_series3->setTitle('SAMSUNG Series 3 15.6&quot; Laptop');
	    $samsung_series3->setCode('M0219A3GX3');
	    $samsung_series3->setPrice(529.99);
	    $samsung_series3->setAmount(10);
	    $samsung_series3->setDescription('<p>SAMSUNG Series 3 15.6&quot; Laptop Description</p>');
	    $samsung_series3->setDescriptionFull('<p>Dont be weighed down by wasted time, let your PC come alive when you need it. Your life happens on the go, you dont have time to wait for PC to shut down and power up. With Samsungs exclusive Fast Start technology, simply close the lid to enter a hybrid sleep mode. When you open the lid, you are up and running in less than 3 sec.</p>');
	    $samsung_series3->setIsActive(1);
	    
	    $samsung_series7 = new Product();
	    $samsung_series7->setCategory($em->merge($this->getReference('category-laptops')));
	    //$samsung_series7->addCategory($em->merge($this->getReference('category-laptops'))); //manyToMany
	    $samsung_series7->setTitle('SAMSUNG Series 7 Chronos 14&quot; Notebook');
	    $samsung_series7->setCode('P0220KHOS3');
	    $samsung_series7->setPrice(529.99);
	    $samsung_series7->setAmount(10);
	    $samsung_series7->setDescription('<p>SAMSUNG Series 7 Chronos 14&quot; Notebook Description</p>');
	    $samsung_series7->setDescriptionFull('<p>Dont be weighed down by wasted time, let your PC come alive when you need it. Your life happens on the go, you dont have time to wait for PC to shut down and power up. With Samsungs exclusive Fast Start technology, simply close the lid to enter a hybrid sleep mode. When you open the lid, you are up and running in less than 3 sec.</p>');
	    $samsung_series7->setIsActive(1);
	    
	    $samsung_series9 = new Product();
	    $samsung_series9->setCategory($em->merge($this->getReference('category-laptops')));
	    //$samsung_series9->addCategory($em->merge($this->getReference('category-laptops'))); //manyToMany
	    $samsung_series9->setTitle('SAMSUNG Series 9 13.3&quot; Laptop');
	    $samsung_series9->setCode('X0221UHBTA');
	    $samsung_series9->setPrice(2049);
	    $samsung_series9->setAmount(10);
	    $samsung_series9->setDescription('<p>SAMSUNG Series 9 13.3&quot; Laptop Description</p>');
	    $samsung_series9->setDescriptionFull('<p>Dont be weighed down by wasted time, let your PC come alive when you need it. Your life happens on the go, you dont have time to wait for PC to shut down and power up. With Samsungs exclusive Fast Start technology, simply close the lid to enter a hybrid sleep mode. When you open the lid, you are up and running in less than 3 sec.</p>');
	    $samsung_series9->setIsActive(1);
	    
	    $apple_ipad_2_black = new Product();
	    $apple_ipad_2_black->setCategory($em->merge($this->getReference('category-tablets')));
	    //$apple_ipad_2_black->addCategory($em->merge($this->getReference('category-tablets'))); //manyToMany
	    $apple_ipad_2_black->setTitle('Apple iPad 2 Black');
	    $apple_ipad_2_black->setCode('E0240Y27BE');
	    $apple_ipad_2_black->setPrice(499.00);
	    $apple_ipad_2_black->setAmount(10);
	    $apple_ipad_2_black->setDescription('<p>Apple iPad 2 Black Description</p>');
	    $apple_ipad_2_black->setDescriptionFull('<p>The all-new thinner and lighter design makes iPad 2 even more comfortable to hold. Its even more powerful with the dual-core A5 chip, yet has the same 10 hours of battery life. 1 With two cameras, you can make FaceTime video calls,2 record HD video and put a twist on your snapshots in Photo Booth. And the iPad Smart Cover attaches magnetically and wakes up, stands up and brightens up your iPad 2.3 Product Features 9.7 LED-backlit display with IPS technology Dual-core A5 chip Front and back cameras Up to 10 hours of battery life Built-in Wi-Fi (802.11a/b/g/n) 3G data service with AT&amp;T (data plan sold separately) Bluetooth 2.1 + EDR technology 16GB flash storage Over 65,000 apps made for iPad, available from the App Store</p>');
	    $apple_ipad_2_black->setIsActive(1);
	    
	    $apple_ipad_2_white = new Product();
	    $apple_ipad_2_white->setCategory($em->merge($this->getReference('category-tablets')));
	    //$apple_ipad_2_white->addCategory($em->merge($this->getReference('category-tablets'))); //manyToMany
	    $apple_ipad_2_white->setTitle('Apple iPad 2 White');
	    $apple_ipad_2_white->setCode('I0241GCXF9');
	    $apple_ipad_2_white->setPrice(10);
	    $apple_ipad_2_white->setAmount(10);
	    $apple_ipad_2_white->setDescription('<p>Apple iPad 2 White Description</p>');
	    $apple_ipad_2_white->setDescriptionFull('<p>The all-new thinner and lighter design makes iPad 2 even more comfortable to hold. Its even more powerful with the dual-core A5 chip, yet has the same 10 hours of battery life. 1 With two cameras, you can make FaceTime video calls,2 record HD video and put a twist on your snapshots in Photo Booth. And the iPad Smart Cover attaches magnetically and wakes up, stands up and brightens up your iPad 2.3 Product Features 9.7 LED-backlit display with IPS technology Dual-core A5 chip Front and back cameras Up to 10 hours of battery life Built-in Wi-Fi (802.11a/b/g/n) 3G data service with AT&amp;T (data plan sold separately) Bluetooth 2.1 + EDR technology 16GB flash storage Over 65,000 apps made for iPad, available from the App Store</p>');
	    $apple_ipad_2_white->setIsActive(1);
	    
	    $samsung_galaxy_tab7_0 = new Product();
	    $samsung_galaxy_tab7_0->setCategory($em->merge($this->getReference('category-tablets')));
	    //$samsung_galaxy_tab7_0->addCategory($em->merge($this->getReference('category-tablets'))); //manyToMany
	    $samsung_galaxy_tab7_0->setTitle('Samsung Galaxy Tab&trade; 7.0&quot;');
	    $samsung_galaxy_tab7_0->setCode('E0225PPZPL');
	    $samsung_galaxy_tab7_0->setPrice(199.99);
	    $samsung_galaxy_tab7_0->setAmount(10);
	    $samsung_galaxy_tab7_0->setDescription('<p>Samsung Galaxy Tab&trade; 7.0&quot; Description</p>');
	    $samsung_galaxy_tab7_0->setDescriptionFull('<p>The Samsung Galaxy Tab&trade; brings you the media you want and keeps you connected with anyone, anytime. Compact and light, you can keep in touch with people and content through 3G connectivity, Wi-Fi&reg; 802.11 b/g/n, Bluetooth&reg; Wireless Technology 3.0. With a battery life of up to seven hours* and a crisp TFT-LCD display, you&rsquo;re free to communicate, update, and enjoy.</p>');
	    $samsung_galaxy_tab7_0->setIsActive(1);
	    
	    $samsung_galaxy_tab8_9 = new Product();
	    $samsung_galaxy_tab8_9->setCategory($em->merge($this->getReference('category-tablets')));
	    //$samsung_galaxy_tab8_9->addCategory($em->merge($this->getReference('category-tablets'))); //manyToMany
	    $samsung_galaxy_tab8_9->setTitle('Samsung Galaxy Tab&trade; 8.9');
	    $samsung_galaxy_tab8_9->setCode('Y0224Y3QQU');
	    $samsung_galaxy_tab8_9->setPrice(479.99);
	    $samsung_galaxy_tab8_9->setAmount(10);
	    $samsung_galaxy_tab8_9->setDescription('<p>Samsung Galaxy Tab&trade; 8.9 Description</p>');
	    $samsung_galaxy_tab8_9->setDescriptionFull('<p>Your eyes have never seen such rich, luscious color. And at 1280x800, the resolution is well above normal HD standards. Of course, everything about the Tab is above normal.</p>');
	    $samsung_galaxy_tab8_9->setIsActive(1);
	        
	    $em->persist($asus_cp6130);
	    $em->persist($asus_cp6230);
	    $em->persist($asus_essentio_cp1130);
	    
	    $em->persist($samsung_series3);
	    $em->persist($samsung_series7);
	    $em->persist($samsung_series9);
	    
	    $em->persist($apple_ipad_2_black);
	    $em->persist($apple_ipad_2_white);
	    $em->persist($samsung_galaxy_tab7_0);
	    $em->persist($samsung_galaxy_tab8_9);
	    
	    $em->flush();
	    
	    $this->addReference('product-asus_cp6130', $asus_cp6130);
	    $this->addReference('product-asus_cp6230', $asus_cp6230);
	    $this->addReference('product-asus_essentio_cp1130', $asus_essentio_cp1130);
	    
	    $this->addReference('product-samsung_series3', $samsung_series3);
	    $this->addReference('product-samsung_series7', $samsung_series7);
	    $this->addReference('product-samsung_series9', $samsung_series9);
	    
	    $this->addReference('product-apple_ipad_2_black', $apple_ipad_2_black);
	    $this->addReference('product-apple_ipad_2_white', $apple_ipad_2_white);
	    $this->addReference('product-samsung_galaxy_tab7_0', $samsung_galaxy_tab7_0);
	    $this->addReference('product-samsung_galaxy_tab8_9', $samsung_galaxy_tab8_9);
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}