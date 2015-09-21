<?php

namespace Application\ShopAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            //->add('slug')
            ->add('description', 'textarea', array('attr' => array('rows' => '3')))
            //->add('image')
            ->add('file', 'file', array('label' => 'Category image', 'required' => false))
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
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\ShopAdminBundle\Entity\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_shopadminbundle_category';
    }
}
