<?php

namespace Application\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
			->add('slug')
            ->add('content')
            ->add('category')
            ->add('user')
            ->add('tags')
        ;
    }

    public function getName()
    {
        return 'application_blogbundle_posttype';
    }
}
