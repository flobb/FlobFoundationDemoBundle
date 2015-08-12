<?php

namespace Flob\Bundle\FoundationDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class KitchensinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = ['Choice 1', 'Choice 2', 'Obi wan kenobi'];
        $builder
            ->add('text', 'text', [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['placeholder' => 'This is a placeholder'],
            ])
            ->add('textarea', 'textarea')
            ->add('email', 'email')
            ->add('integer', 'integer')
            ->add('money', 'money', [
                'currency' => 'EUR',
            ])
            ->add(
                $builder->create('sub-form', 'form')
                    ->add('subformemail1', 'email', [
                        'constraints' => [new Assert\NotBlank(), new Assert\Email()],
                        'attr' => ['placeholder' => 'email constraints'],
                        'label' => 'A custom label : ',
                    ])
                    ->add('subformtext1', 'text')
            )
            ->add('number', 'number')
            ->add('password', 'password')
            ->add('percent', 'percent')
            ->add('search', 'search')
            ->add('url', 'url')
            ->add('choice1', 'choice', [
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('choice1B', 'choice', [
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'label_attr' => ['class' => 'checkbox-inline'],
            ])
            ->add('choice1C', 'choice', [
                'choices' => $choices,
                'multiple' => true,
                'expanded' => true,
                'label' => false,
                'label_attr' => ['class' => 'checkbox-inline'],
            ])
            ->add('choice2', 'choice', [
                'choices' => $choices,
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('choice3', 'choice', [
                'choices' => $choices,
                'multiple' => true,
                'expanded' => false,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('choice4', 'choice', [
                'choices' => $choices,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('checkbox', 'checkbox', [])
            ->add('radio', 'radio', [])
            ->add('country', 'country')
            ->add('language', 'language')
            ->add('locale', 'locale')
            ->add('timezone', 'timezone', [])
            ->add('date', 'date', [])
            ->add('date_single_text', 'date', [
                'widget' => 'single_text', ])
            ->add('datetime', 'datetime', [])
            ->add('datetime_single_text', 'datetime', [
                'widget' => 'single_text',
            ])
            ->add('time', 'time', [
                'constraints' => new Assert\IsTrue(),
            ])
            ->add('time_single_text', 'time', [
                'widget' => 'single_text',
            ])
            ->add('birthday', 'birthday', [
                'constraints' => new Assert\IsTrue(),
            ])
            ->add('file', 'file')
            ->add('password_repeated', 'repeated', [
                'type' => 'password',
                'invalid_message' => 'The password fields must match.',
                'options' => ['required' => true],
                'first_options' => ['label' => 'Password field with his repeat'],
                'second_options' => ['label' => 'Repeat Password'],
            ])
            ->add('slider_h', 'slider', [
                'label' => 'Slider (horizontal)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
            ])
            ->add('slider_v', 'slider', [
                'label' => 'Slider (vertical)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
                'vertical' => true,
            ])
            ->add('switch_radio', 'switch', [
                'label' => 'Switches (as radio)',
                'choices' => $choices,
                'multiple' => false,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('switch_checkboxes', 'switch', [
                'label' => 'Switches (as checkboxes)',
                'choices' => $choices,
                'multiple' => true,
            ])
            ->add('button_group', 'button_group', [
                'label' => 'Buttons group',
                'buttons' => [
                    'back' => [
                        'type' => 'button',
                        'options' => [
                            'label' => 'Cancel',
                            'attr' => [
                                'class' => 'secondary',
                            ],
                        ],
                    ],
                    'save' => [
                        'type' => 'submit',
                        'options' => [
                            'label' => 'Submit',
                        ],
                    ],
                ],
                'attr' => [
                    'class' => 'right',
                ],
            ])
            ->add('button_bar', 'button_bar', [
                'button_groups' => [
                    'button_group_first' => [
                        'label' => 'Buttons group',
                        'buttons' => [
                            'one' => [
                                'type' => 'submit',
                                'options' => [
                                    'label' => 'one',
                                ],
                            ],
                            'two' => [
                                'type' => 'button',
                                'options' => [
                                    'label' => 'two',
                                    'attr' => [
                                        'class' => 'success',
                                    ],
                                ],
                            ],
                            'three' => [
                                'type' => 'button',
                                'options' => [
                                    'label' => 'three',
                                    'attr' => [
                                        'class' => 'alert',
                                    ],
                                ],
                            ],
                        ],
                        'attr' => [
                            'class' => 'round',
                        ],
                    ],
                    'button_group_second' => [
                        'label' => 'Buttons group',
                        'buttons' => [
                            'four' => [
                                'type' => 'button',
                                'options' => [
                                    'label' => 'four',
                                    'attr' => [
                                        'class' => 'disabled',
                                    ],
                                ],
                            ],
                            'five' => [
                                'type' => 'button',
                                'options' => [
                                    'label' => 'five',
                                    'attr' => [
                                        'class' => 'secondary',
                                    ],
                                ],
                            ],
                            'six' => [
                                'type' => 'button',
                                'options' => [
                                    'label' => 'six',
                                    'attr' => [
                                        'class' => 'secondary',
                                    ],
                                ],
                            ],
                        ],
                        'attr' => [
                            'class' => 'radius',
                        ],
                    ],
                ],
            ]);
    }

    public function getName()
    {
        return 'kitchensink';
    }
}
