<?php

namespace Application\ShopAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Transaction
 */
class Transaction
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shipping_address;

    /**
     * @var string
     */
    private $billing_address;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \Application\ShopAdminBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set shipping_address
     *
     * @param string $shippingAddress
     * @return Transaction
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shipping_address = $shippingAddress;

        return $this;
    }

    /**
     * Get shipping_address
     *
     * @return string 
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * Set billing_address
     *
     * @param string $billingAddress
     * @return Transaction
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billing_address = $billingAddress;

        return $this;
    }

    /**
     * Get billing_address
     *
     * @return string 
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Transaction
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
     * Set status
     *
     * @param integer $status
     * @return Transaction
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Transaction
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
     * Set user
     *
     * @param \Application\ShopAdminBundle\Entity\User $user
     * @return Transaction
     */
    public function setUser(\Application\ShopAdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\ShopAdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add products
     *
     * @param \Application\ShopAdminBundle\Entity\Product $products
     * @return Transaction
     */
    public function addProduct(\Application\ShopAdminBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Application\ShopAdminBundle\Entity\Product $products
     */
    public function removeProduct(\Application\ShopAdminBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
        $this->created_at = new \DateTime();
    }
    
    public function __toString()
    {
        return $this->getShippingAddress();
    }
    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $billing_firstname;

    /**
     * @var string
     */
    private $billing_lastname;

    /**
     * @var string
     */
    private $billing_phone;

    /**
     * @var string
     */
    private $billing_fax;

    /**
     * @var string
     */
    private $billing_address2;

    /**
     * @var string
     */
    private $billing_city;

    /**
     * @var string
     */
    private $billing_country;

    /**
     * @var string
     */
    private $billing_zipcode;


    /**
     * Set company
     *
     * @param string $company
     * @return Transaction
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Transaction
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set billing_firstname
     *
     * @param string $billingFirstname
     * @return Transaction
     */
    public function setBillingFirstname($billingFirstname)
    {
        $this->billing_firstname = $billingFirstname;

        return $this;
    }

    /**
     * Get billing_firstname
     *
     * @return string 
     */
    public function getBillingFirstname()
    {
        return $this->billing_firstname;
    }

    /**
     * Set billing_lastname
     *
     * @param string $billingLastname
     * @return Transaction
     */
    public function setBillingLastname($billingLastname)
    {
        $this->billing_lastname = $billingLastname;

        return $this;
    }

    /**
     * Get billing_lastname
     *
     * @return string 
     */
    public function getBillingLastname()
    {
        return $this->billing_lastname;
    }

    /**
     * Set billing_phone
     *
     * @param string $billingPhone
     * @return Transaction
     */
    public function setBillingPhone($billingPhone)
    {
        $this->billing_phone = $billingPhone;

        return $this;
    }

    /**
     * Get billing_phone
     *
     * @return string 
     */
    public function getBillingPhone()
    {
        return $this->billing_phone;
    }

    /**
     * Set billing_fax
     *
     * @param string $billingFax
     * @return Transaction
     */
    public function setBillingFax($billingFax)
    {
        $this->billing_fax = $billingFax;

        return $this;
    }

    /**
     * Get billing_fax
     *
     * @return string 
     */
    public function getBillingFax()
    {
        return $this->billing_fax;
    }

    /**
     * Set billing_address2
     *
     * @param string $billingAddress2
     * @return Transaction
     */
    public function setBillingAddress2($billingAddress2)
    {
        $this->billing_address2 = $billingAddress2;

        return $this;
    }

    /**
     * Get billing_address2
     *
     * @return string 
     */
    public function getBillingAddress2()
    {
        return $this->billing_address2;
    }

    /**
     * Set billing_city
     *
     * @param string $billingCity
     * @return Transaction
     */
    public function setBillingCity($billingCity)
    {
        $this->billing_city = $billingCity;

        return $this;
    }

    /**
     * Get billing_city
     *
     * @return string 
     */
    public function getBillingCity()
    {
        return $this->billing_city;
    }

    /**
     * Set billing_country
     *
     * @param string $billingCountry
     * @return Transaction
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billing_country = $billingCountry;

        return $this;
    }

    /**
     * Get billing_country
     *
     * @return string 
     */
    public function getBillingCountry()
    {
        return $this->billing_country;
    }

    /**
     * Set billing_zipcode
     *
     * @param string $billingZipcode
     * @return Transaction
     */
    public function setBillingZipcode($billingZipcode)
    {
        $this->billing_zipcode = $billingZipcode;

        return $this;
    }

    /**
     * Get billing_zipcode
     *
     * @return string 
     */
    public function getBillingZipcode()
    {
        return $this->billing_zipcode;
    }
    /**
     * @var string
     */
    private $shipping_firstname;

    /**
     * @var string
     */
    private $shipping_lastname;

    /**
     * @var string
     */
    private $shipping_phone;

    /**
     * @var string
     */
    private $shipping_fax;

    /**
     * @var string
     */
    private $shipping_address2;

    /**
     * @var string
     */
    private $shipping_city;

    /**
     * @var string
     */
    private $shipping_country;

    /**
     * @var string
     */
    private $shipping_zipcode;

    /**
     * @var string
     */
    private $payment_method;

    /**
     * @var string
     */
    private $shipping_cost;

    /**
     * @var string
     */
    private $shipping_method;


    /**
     * Set shipping_firstname
     *
     * @param string $shippingFirstname
     * @return Transaction
     */
    public function setShippingFirstname($shippingFirstname)
    {
        $this->shipping_firstname = $shippingFirstname;

        return $this;
    }

    /**
     * Get shipping_firstname
     *
     * @return string 
     */
    public function getShippingFirstname()
    {
        return $this->shipping_firstname;
    }

    /**
     * Set shipping_lastname
     *
     * @param string $shippingLastname
     * @return Transaction
     */
    public function setShippingLastname($shippingLastname)
    {
        $this->shipping_lastname = $shippingLastname;

        return $this;
    }

    /**
     * Get shipping_lastname
     *
     * @return string 
     */
    public function getShippingLastname()
    {
        return $this->shipping_lastname;
    }

    /**
     * Set shipping_phone
     *
     * @param string $shippingPhone
     * @return Transaction
     */
    public function setShippingPhone($shippingPhone)
    {
        $this->shipping_phone = $shippingPhone;

        return $this;
    }

    /**
     * Get shipping_phone
     *
     * @return string 
     */
    public function getShippingPhone()
    {
        return $this->shipping_phone;
    }

    /**
     * Set shipping_fax
     *
     * @param string $shippingFax
     * @return Transaction
     */
    public function setShippingFax($shippingFax)
    {
        $this->shipping_fax = $shippingFax;

        return $this;
    }

    /**
     * Get shipping_fax
     *
     * @return string 
     */
    public function getShippingFax()
    {
        return $this->shipping_fax;
    }

    /**
     * Set shipping_address2
     *
     * @param string $shippingAddress2
     * @return Transaction
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shipping_address2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get shipping_address2
     *
     * @return string 
     */
    public function getShippingAddress2()
    {
        return $this->shipping_address2;
    }

    /**
     * Set shipping_city
     *
     * @param string $shippingCity
     * @return Transaction
     */
    public function setShippingCity($shippingCity)
    {
        $this->shipping_city = $shippingCity;

        return $this;
    }

    /**
     * Get shipping_city
     *
     * @return string 
     */
    public function getShippingCity()
    {
        return $this->shipping_city;
    }

    /**
     * Set shipping_country
     *
     * @param string $shippingCountry
     * @return Transaction
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shipping_country = $shippingCountry;

        return $this;
    }

    /**
     * Get shipping_country
     *
     * @return string 
     */
    public function getShippingCountry()
    {
        return $this->shipping_country;
    }

    /**
     * Set shipping_zipcode
     *
     * @param string $shippingZipcode
     * @return Transaction
     */
    public function setShippingZipcode($shippingZipcode)
    {
        $this->shipping_zipcode = $shippingZipcode;

        return $this;
    }

    /**
     * Get shipping_zipcode
     *
     * @return string 
     */
    public function getShippingZipcode()
    {
        return $this->shipping_zipcode;
    }

    /**
     * Set payment_method
     *
     * @param string $paymentMethod
     * @return Transaction
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->payment_method = $paymentMethod;

        return $this;
    }

    /**
     * Get payment_method
     *
     * @return string 
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set shipping_cost
     *
     * @param string $shippingCost
     * @return Transaction
     */
    public function setShippingCost($shippingCost)
    {
        $this->shipping_cost = $shippingCost;

        return $this;
    }

    /**
     * Get shipping_cost
     *
     * @return string 
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    /**
     * Set shipping_method
     *
     * @param string $shippingMethod
     * @return Transaction
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shipping_method = $shippingMethod;

        return $this;
    }

    /**
     * Get shipping_method
     *
     * @return string 
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('email', new NotBlank());
        
        $metadata->addPropertyConstraint('billing_firstname', new NotBlank());
        $metadata->addPropertyConstraint('billing_lastname', new NotBlank());
        $metadata->addPropertyConstraint('billing_address', new NotBlank());
        $metadata->addPropertyConstraint('billing_city', new NotBlank());
        $metadata->addPropertyConstraint('billing_country', new NotBlank());
        $metadata->addPropertyConstraint('billing_zipcode', new NotBlank());
        
        $metadata->addPropertyConstraint('shipping_firstname', new NotBlank());
        $metadata->addPropertyConstraint('shipping_lastname', new NotBlank());
        $metadata->addPropertyConstraint('shipping_address', new NotBlank());
        $metadata->addPropertyConstraint('shipping_city', new NotBlank());
        $metadata->addPropertyConstraint('shipping_country', new NotBlank());
        $metadata->addPropertyConstraint('shipping_zipcode', new NotBlank());
        
        $metadata->addPropertyConstraint('quantity', new NotBlank());
        $metadata->addPropertyConstraint('payment_method', new NotBlank());
        $metadata->addPropertyConstraint('shipping_cost', new NotBlank());
        $metadata->addPropertyConstraint('shipping_method', new NotBlank());
        $metadata->addPropertyConstraint('status', new NotBlank());
        $metadata->addPropertyConstraint('user', new NotBlank());
    }
}
