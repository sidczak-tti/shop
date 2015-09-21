<?php

namespace Application\ShopAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \Application\ShopAdminBundle\Entity\Product
     */
    private $product;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set product
     *
     * @param \Application\ShopAdminBundle\Entity\Product $product
     * @return Image
     */
    public function setProduct(\Application\ShopAdminBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Application\ShopAdminBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'bundles/applicationshop/images/product';
    }
    
    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
    	$file = $this->getUploadRootDir().'/'.$this->getImage();

	    if (file_exists($file)) {
	    	unlink($file);
	    }
    }
}
