<?php

namespace Flob\Bundle\FoundationDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class KitchensinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {https://github.com/symfony/symfony/pull/10272
        // Text Fields
        $builder->add('text',               'text',     array('label' => 'Default text', 'required' => false, 'read_only' => false));
        $builder->add('textRequired',       'text',     array('label' => 'Required text', 'required' => true, 'read_only' => false));
        $builder->add('textDisabled',       'text',     array('label' => 'Disabled text', 'required' => false, 'read_only' => true));
        $builder->add('textError',          'text',     array('label' => 'Text with error', 'constraints' => array(new NotBlank(), new NotNull())));
        $builder->add('email',              'email',    array('label' => 'Email'));
        $builder->add('integer',            'integer',  array('label' => 'Integer'));
        $builder->add('money',              'money',    array('label' => 'Money'));
        $builder->add('number',             'number',   array('label' => 'Number'));
        $builder->add('password',           'password', array('label' => 'Password'));
        $builder->add('percent',            'percent',  array('label' => 'Percent'));
        $builder->add('search',             'search',   array('label' => 'Search'));
        $builder->add('url',                'url',      array('label' => 'Url'));

        // Choices
        $builder->add('radio',              'choice',   array('label' => 'Radio', 'choices' => array(1 => 'Choice 1', 2 => 'Choice 2', 3 => 'Obi wan kenobi'), 'multiple' => false, 'expanded' => true));
        $builder->add('radio_disabled',     'choice',   array('label' => 'Radio disabled', 'choices' => array(1 => 'Yoda'), 'multiple' => false, 'expanded' => true, 'disabled' => true));
        $builder->add('checkbox',           'choice',   array('label' => 'Checkbox', 'choices' => array(1 => 'Choice 1', 2 => 'Choice 2', 3 => 'Obi wan kenobi'), 'required' => true, 'multiple' => true, 'expanded' => true));
        $builder->add('checkbox_disabled',  'choice',   array('label' => 'Checkbox disabled', 'choices' => array(1 => 'Yoda'), 'data' => array(1), 'multiple' => true, 'expanded' => true, 'disabled' => true));

        // Slider
        $builder->add('slider',             'slider',   array('label' => 'Slider', 'start' => 10, 'end' => 20, 'step' => 2));

        // Switch
        $builder->add('switch_radio',       'switch',   array('label' => 'Switch (as radio)', 'choices' => array(1 => 'Choice 1', 2 => 'Choice 2', 3 => 'Obi wan kenobi'), 'multiple' => false));
        $builder->add('switch_checkboxes',  'switch',   array('label' => 'Switch (as checkboxes)', 'choices' => array(1 => 'Choice 1', 2 => 'Choice 2', 3 => 'Obi wan kenobi'), 'multiple' => true));

        // Date and time
        $builder->add('date',               'date',     array('label' => 'Date'));
        $builder->add('time',               'time',     array('label' => 'Time'));
        $builder->add('datetime',           'datetime', array('label' => 'Datetime'));

        // Textarea
        $builder->add('textarea',           'textarea', array('label' => 'Textarea'));


        /*

                $choices = array('choice a', 'choice b', 'choice c');
        $form = $builder
            ->add('text1', 'text', array(
                'constraints' => new Assert\NotBlank(),
                'attr' => array('placeholder' => 'not blank constraints')
            ))
            ->add('textarea', 'textarea')
            ->add('email', 'email')
            ->add('integer', 'integer')
            ->add('money', 'money', array(
                'currency' => 'EUR',
            ))
            ->add('money2', 'money', array(
                'currency' => 'USD',
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
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('submit', 'submit', array('attr' => array('formnovalidate' => true)))

         */
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection'   => false,
        ));
    }

    public function getName()
    {
        return 'kitchensink';
    }
}
