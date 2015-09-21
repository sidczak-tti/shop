<?php

namespace Application\ShopAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $price_promotion;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $description_full;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * @var \Application\ShopAdminBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $transactions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Product
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price_promotion
     *
     * @param string $pricePromotion
     * @return Product
     */
    public function setPricePromotion($pricePromotion)
    {
        $this->price_promotion = $pricePromotion;

        return $this;
    }

    /**
     * Get price_promotion
     *
     * @return string 
     */
    public function getPricePromotion()
    {
        return $this->price_promotion;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Product
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description_full
     *
     * @param string $descriptionFull
     * @return Product
     */
    public function setDescriptionFull($descriptionFull)
    {
        $this->description_full = $descriptionFull;

        return $this;
    }

    /**
     * Get description_full
     *
     * @return string 
     */
    public function getDescriptionFull()
    {
        return $this->description_full;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Product
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Product
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add reviews
     *
     * @param \Application\ShopAdminBundle\Entity\Review $reviews
     * @return Product
     */
    public function addReview(\Application\ShopAdminBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \Application\ShopAdminBundle\Entity\Review $reviews
     */
    public function removeReview(\Application\ShopAdminBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add images
     *
     * @param \Application\ShopAdminBundle\Entity\Image $images
     * @return Product
     */
    public function addImage(\Application\ShopAdminBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Application\ShopAdminBundle\Entity\Image $images
     */
    public function removeImage(\Application\ShopAdminBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set category
     *
     * @param \Application\ShopAdminBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Application\ShopAdminBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Application\ShopAdminBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tags
     *
     * @param \Application\ShopAdminBundle\Entity\Tag $tags
     * @return Product
     */
    public function addTag(\Application\ShopAdminBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Application\ShopAdminBundle\Entity\Tag $tags
     */
    public function removeTag(\Application\ShopAdminBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add transactions
     *
     * @param \Application\ShopAdminBundle\Entity\Transaction $transactions
     * @return Product
     */
    public function addTransaction(\Application\ShopAdminBundle\Entity\Transaction $transactions)
    {
        $this->transactions[] = $transactions;

        return $this;
    }

    /**
     * Remove transactions
     *
     * @param \Application\ShopAdminBundle\Entity\Transaction $transactions
     */
    public function removeTransaction(\Application\ShopAdminBundle\Entity\Transaction $transactions)
    {
        $this->transactions->removeElement($transactions);
    }

    /**
     * Get transactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
        $this->updated_at = new \DateTime();
    }
    
    /**
     * @var string
     */
    private $file;
    
    /**
     * Set file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
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
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        // Add your code here
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }
    
    private $file_rename;
    
    public function setFileRename()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->file_rename = $filename.'.'.$this->getFile()->guessExtension();
        }
    }
 
    public function getFileRename()
    {
        return $this->file_rename;
    }

    /**
     * @ORM\PostPersist
     */
	public function upload()
	{
	    // the file property can be empty if the field is not required
	    if (null === $this->getFile()) {
	        return;
	    }
	
	    // use the original file name here but you should
	    // sanitize it at least to avoid any security issues
	
	    // move takes the target directory and then the
	    // target filename to move to
	    $this->getFile()->move(
	        $this->getUploadRootDir(),
	        $this->getFileRename()
	        //$this->id.'.'.$this->getFile()->guessExtension() //id produktu
	        //$this->getFile()->getClientOriginalName()
	        //$this->path
	    );
	
	    // clean up the file property as you won't need it anymore
	    $this->file = null;
	}

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
    	foreach ($this->getImages() as $img) {
    	    $file = $this->getUploadRootDir().'/'.$img->getImage();

	    	if (file_exists($file)) {
	        	unlink($file);
	    	}
    	}
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('title', new NotBlank());
        $metadata->addPropertyConstraint('code', new NotBlank());
        $metadata->addPropertyConstraint('price', new NotBlank());
        $metadata->addPropertyConstraint('description', new NotBlank());
        $metadata->addPropertyConstraint('description_full', new NotBlank());
        $metadata->addPropertyConstraint('category', new NotBlank());
        //$metadata->addPropertyConstraint('file', new NotBlank());
        $metadata->addPropertyConstraint('file', new Assert\Image());
        /*$metadata->addPropertyConstraint('file', new Assert\File(array(
            'maxSize' => 6000000,
        )));*/
    }
}
