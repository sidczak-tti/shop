<?php

namespace Application\ShopAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company')
            ->add('email')
            ->add('billing_firstname')
            ->add('billing_lastname')
            ->add('billing_phone')
            ->add('billing_fax')    
            ->add('billing_address')
            ->add('billing_address2')
            ->add('billing_city')
            ->add('billing_country')
            ->add('billing_zipcode')
            ->add('shipping_firstname')
            ->add('shipping_lastname')
            ->add('shipping_phone')
            ->add('shipping_fax')    
            ->add('shipping_address')
            ->add('shipping_address2')
            ->add('shipping_city')
            ->add('shipping_country')
            ->add('shipping_zipcode')
            ->add('quantity')
            ->add('payment_method')
            ->add('shipping_cost')
            ->add('shipping_method')
            ->add('status')
            ->add('created_at')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\ShopAdminBundle\Entity\Transaction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_shopadminbundle_transaction';
    }
}
