<?php

namespace Flob\Bundle\FoundationDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class KitchensinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array('Choice 1', 'Choice 2', 'Obi wan kenobi');
        $builder
            ->add('text', 'text', array(
                'constraints' => new Assert\NotBlank(),
                'attr' => array('placeholder' => 'This is a placeholder')
            ))
            ->add('textarea', 'textarea')
            ->add('email', 'email')
            ->add('integer', 'integer')
            ->add('money', 'money', array(
                'currency' => 'EUR'
            ))
            ->add(
                $builder->create('sub-form', 'form')
                    ->add('subformemail1', 'email', array(
                        'constraints' => array(new Assert\NotBlank(), new Assert\Email()),
                        'attr' => array('placeholder' => 'email constraints'),
                        'label' => 'A custom label : ',
                    ))
                    ->add('subformtext1', 'text')
            )
            ->add('number', 'number')
            ->add('password', 'password')
            ->add('percent', 'percent')
            ->add('search', 'search')
            ->add('url', 'url')
            ->add('choice1', 'choice', array(
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('choice1B', 'choice', array(
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'label_attr' => array('class' => 'checkbox-inline'),
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('choice1C', 'choice', array(
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'label' => false,
                'label_attr' => array('class' => 'checkbox-inline'),
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('choice2', 'choice', array(
                'choices' => $choices,
                'multiple' => false,
                'expanded' => true,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('choice3', 'choice', array(
                'choices' => $choices,
                'multiple' => true,
                'expanded' => false,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('choice4', 'choice', array(
                'choices' => $choices,
                'multiple' => false,
                'expanded' => false,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('checkbox', 'checkbox', array(
                'constraints' => new Assert\True(),
            ))
            ->add('radio', 'radio', array(
                'constraints' => new Assert\True(),
            ))
            ->add('country', 'country')
            ->add('language', 'language')
            ->add('locale', 'locale')
            ->add('timezone', 'timezone', array(
                // I know, this do not make sens, but I want an error
                'constraints' => new Assert\True(),
            ))
            ->add('date', 'date', array(
                // I know, this do not make sens, but I want an error
                'constraints' => new Assert\True(),
            ))
            ->add('date_single_text', 'date', array(
                'widget' => 'single_text',
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('datetime', 'datetime', array(
                // I know, this do not make sens, but I want an error
                'constraints' => new Assert\True(),
            ))
            ->add('datetime_single_text', 'datetime', array(
                'widget' => 'single_text',
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('time', 'time', array(
                // I know, this do not make sens, but I want an error
                'constraints' => new Assert\True(),
            ))
            ->add('time_single_text', 'time', array(
                'widget' => 'single_text',
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('birthday', 'birthday', array(
                // I know, this do not make sens, but I want an error
                'constraints' => new Assert\True(),
            ))
            ->add('file', 'file')
            ->add('password_repeated', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'The password fields must match.',
                'options' => array('required' => true),
                'first_options' => array('label' => 'Password field with his repeat'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('slider', 'slider', array(
                'label' => 'Slider',
                'start' => 10,
                'end' => 20,
                'step' => 2,
            ))
            ->add('switch_radio', 'switch', array(
                'label' => 'Switch (as radio)',
                'choices' => $choices,
                'multiple' => false,
            ))
            ->add('switch_checkboxes', 'switch', array(
                'label' => 'Switch (as checkboxes)',
                'choices' => $choices,
                'multiple' => true,
            ));
    }

    public function getName()
    {
        return 'kitchensink';
    }
}
