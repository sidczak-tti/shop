<?php

namespace Application\ShopAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('code')
            ->add('price')
            ->add('price_promotion')
            ->add('amount')
            ->add('description', 'textarea', array('attr' => array('rows' => '3')))
            ->add('description_full', 'textarea', array('attr' => array('rows' => '3')))
            ->add('is_active', 'checkbox', array(
			    'label' => 'Is active',
			))
            ->add('created_at', 'date', array(
            	'widget' => 'single_text',
            	'attr' => array('placeholder' => 'YYYY-MM-DD'),
            ))
            ->add('updated_at', 'date', array(
            	'widget' => 'single_text',
            	'attr' => array('placeholder' => 'YYYY-MM-DD'),
            ))
            ->add('file', 'file', array(
            	//'attr' => array('multiple' => 'multiple')
            ))
            ->add('category')
            ->add('tags')
            //->add('transactions')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\ShopAdminBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_shopadminbundle_product';
    }
}
