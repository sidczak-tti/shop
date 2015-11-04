<?php

namespace Application\ShopAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductTransaction
 */
class ProductTransaction
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \Application\ShopAdminBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Application\ShopAdminBundle\Entity\Transaction
     */
    private $transaction;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return ProductTransaction
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set product
     *
     * @param \Application\ShopAdminBundle\Entity\Product $product
     * @return ProductTransaction
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

    /**
     * Set transaction
     *
     * @param \Application\ShopAdminBundle\Entity\Transaction $transaction
     * @return ProductTransaction
     */
    public function setTransaction(\Application\ShopAdminBundle\Entity\Transaction $transaction = null)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return \Application\ShopAdminBundle\Entity\Transaction 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
