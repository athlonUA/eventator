<?php

namespace Event\EventBundle\Form\Type\Translation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Event\EventBundle\Entity\Sponsor;

class SponsorTranslationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company', 'text', ['required' => false])
            ->add('description', 'textarea', [
                'attr' => array('class' => 'input-xxlarge', 'rows' => 5),
                'required' => false
            ])
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Event\EventBundle\Entity\Translation\SponsorTranslation'
        ));
    }

    public function getName()
    {
        return 'sponsor_translation';
    }
}
