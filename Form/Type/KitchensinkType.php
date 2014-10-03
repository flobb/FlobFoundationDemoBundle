<?php

namespace FlorianBelhomme\Bundle\FoundationDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class KitchensinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
