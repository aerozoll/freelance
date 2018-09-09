<?php
// App/LoginRegisterBundle/Form/RegistrationType.php

namespace App\LoginRegisterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder->add('name');
        //$builder->remove('email'); // here I code for remove email field.
        $builder->add('siteRules', CheckboxType::class, array(
            'label'    => 'С правилами сайта согласен',
            'required' =>true,
            //'constraints' => new NotBlank(),

        ));
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}