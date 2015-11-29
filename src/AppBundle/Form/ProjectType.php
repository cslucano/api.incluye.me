<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Blank;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', ['constraints' => [new Blank()]])
            ->add('shortName', 'text', ['constraints' => [new Blank()]])
            ->add('disabilityType', 'text', ['constraints' => [new Blank()]])
            ->add('gender', 'text', ['constraints' => [new Blank()]])
            ->add('projectLevel', 'text', ['constraints' => [new Blank()]])
            ->add('projectType', 'text', ['constraints' => [new Blank()]])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_project';
    }
}
