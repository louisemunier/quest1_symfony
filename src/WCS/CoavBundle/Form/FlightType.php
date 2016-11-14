<?php

namespace WCS\CoavBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlightType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departure', EntityType::class, array('class'=>'WCS:CoavBundle:Entity:Terrain', 'choice_label'=>'icao',))
            ->add('arrival', EntityType::class, array('class'=>'WCS:CoavBundle:Entity:Terrain', 'choice_label'=>'icao',))
            ->add('plane', EntityType::class, array('class'=>'WCS:CoavBundle:Entity:PlanetModel', 'choice_label'=>'manufacturer',))
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime', 'datetime')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCS\CoavBundle\Entity\Flight'
        ));
    }
}
