<?php

namespace Application\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('createdAt')
            ->add('user')
            ->add('post')
        ;
    }

    public function getName()
    {
        return 'application_blogbundle_commenttype';
    }
}
