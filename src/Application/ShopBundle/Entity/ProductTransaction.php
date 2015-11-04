<?php

namespace Application\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductTransaction
 */
class ProductTransaction
{
    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \Application\ShopBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Application\ShopBundle\Entity\Transaction
     */
    private $transaction;


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
     * @param \Application\ShopBundle\Entity\Product $product
     * @return ProductTransaction
     */
    public function setProduct(\Application\ShopBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Application\ShopBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set transaction
     *
     * @param \Application\ShopBundle\Entity\Transaction $transaction
     * @return ProductTransaction
     */
    public function setTransaction(\Application\ShopBundle\Entity\Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return \Application\ShopBundle\Entity\Transaction 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
