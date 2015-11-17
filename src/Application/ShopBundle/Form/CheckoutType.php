<?php

namespace Application\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CheckoutType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company')
            ->add('email', null, array('label' => 'E-mail *'))
            ->add('billing_firstname', null, array('label' => 'First name *'))
            ->add('billing_lastname', null, array('label' => 'Last name *'))
            ->add('billing_phone', null, array('label' => 'Phone'))
            ->add('billing_fax', null, array('label' => 'Fax'))
            ->add('billing_address', null, array('label' => 'Address *'))
            ->add('billing_address2')
            ->add('billing_city', null, array('label' => 'City *'))
            ->add('billing_country', null, array('label' => 'Country *'))
            ->add('billing_zipcode', null, array('label' => 'Zip/postal code *'))
            ->add('shipping_firstname')
            ->add('shipping_lastname')
            ->add('shipping_phone')
            ->add('shipping_fax')    
            ->add('shipping_address')
            ->add('shipping_address2')
            ->add('shipping_city')
            ->add('shipping_country')
            ->add('shipping_zipcode')
            //->add('payment_method')
            ->add('payment_method', 'choice', array(
                'choices' => array(
                    'bank-transfer' => 'Bank transfer', 
                    'payu' => 'PayU', 
                    'paypal' => 'PayPal', 
                    'cash-delivery' => 'Cash on delivery'
                ),
                'expanded' => true
            ))
            //->add('shipping_method')
            ->add('shipping_method', 'choice', array(
                'choices' => array(
                    'post' => 'Post 0,00 zł', 
                    'dhl' => 'DHL 6,90 zł', 
                    'reception-pack' => 'Reception pack 0,00 zł'
                ),
                'expanded' => true
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\ShopBundle\Entity\Transaction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_shopbundle_checkout';
    }
}
