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
                'attr' => array('placeholder' => 'This is a placeholder'),
            ))
            ->add('textarea', 'textarea')
            ->add('email', 'email')
            ->add('integer', 'integer')
            ->add('money', 'money', array(
                'currency' => 'EUR',
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
            ))
            ->add('choice1C', 'choice', array(
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'label' => false,
                'label_attr' => array('class' => 'checkbox-inline'),
            ))
            ->add('choice2', 'choice', array(
                'choices' => $choices,
                'multiple' => false,
                'expanded' => true,
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
            ))
            ->add('checkbox', 'checkbox', array())
            ->add('radio', 'radio', array())
            ->add('country', 'country')
            ->add('language', 'language')
            ->add('locale', 'locale')
            ->add('timezone', 'timezone', array())
            ->add('date', 'date', array())
            ->add('date_single_text', 'date', array(
                'widget' => 'single_text', ))
            ->add('datetime', 'datetime', array())
            ->add('datetime_single_text', 'datetime', array(
                'widget' => 'single_text',
            ))
            ->add('time', 'time', array(
                'constraints' => new Assert\True(),
            ))
            ->add('time_single_text', 'time', array(
                'widget' => 'single_text',
            ))
            ->add('birthday', 'birthday', array(
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
            ->add('slider_h', 'slider', array(
                'label' => 'Slider (horizontal)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('slider_v', 'slider', array(
                'label' => 'Slider (vertical)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
                'vertical' => true,
            ))
            ->add('switch_radio', 'switch', array(
                'label' => 'Switches (as radio)',
                'choices' => $choices,
                'multiple' => false,
                'constraints' => new Assert\NotBlank(),
            ))
            ->add('switch_checkboxes', 'switch', array(
                'label' => 'Switches (as checkboxes)',
                'choices' => $choices,
                'multiple' => true,
            ))
            ->add('button_group', 'button_group', array(
                'label' => 'Buttons group',
                'buttons' => array(
                    'back' => array(
                        'type'    => 'button',
                        'options' => array(
                            'label' => 'Cancel',
                            'attr' => array(
                                'class' => 'secondary',
                            ),
                        ),
                    ),
                    'save' => array(
                        'type'    => 'submit',
                        'options' => array(
                            'label' => 'Submit',
                        ),
                    ),
                ),
                'attr' => array(
                    'class' => 'right',
                ),
            ))
            ->add('button_bar', 'button_bar', array(
                'button_groups' => array(
                    'button_group_first' => array(
                        'label' => 'Buttons group',
                        'buttons' => array(
                            'one' => array(
                                'type'    => 'submit',
                                'options' => array(
                                    'label' => 'one',
                                ),
                            ),
                            'two' => array(
                                'type'    => 'button',
                                'options' => array(
                                    'label' => 'two',
                                    'attr' => array(
                                        'class' => 'success',
                                    ),
                                ),
                            ),
                            'three' => array(
                                'type'    => 'button',
                                'options' => array(
                                    'label' => 'three',
                                    'attr' => array(
                                        'class' => 'alert',
                                    ),
                                ),
                            ),
                        ),
                        'attr' => array(
                            'class' => 'round',
                        ),
                    ),
                    'button_group_second' => array(
                        'label' => 'Buttons group',
                        'buttons' => array(
                            'four' => array(
                                'type'    => 'button',
                                'options' => array(
                                    'label' => 'four',
                                    'attr' => array(
                                        'class' => 'disabled',
                                    ),
                                ),
                            ),
                            'five' => array(
                                'type'    => 'button',
                                'options' => array(
                                    'label' => 'five',
                                    'attr' => array(
                                        'class' => 'secondary',
                                    ),
                                ),
                            ),
                            'six' => array(
                                'type'    => 'button',
                                'options' => array(
                                    'label' => 'six',
                                    'attr' => array(
                                        'class' => 'secondary',
                                    ),
                                ),
                            ),
                        ),
                        'attr' => array(
                            'class' => 'radius',
                        ),
                    ),
                ),
            ));
    }

    public function getName()
    {
        return 'kitchensink';
    }
}
