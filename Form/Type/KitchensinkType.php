<?php

namespace Flob\Bundle\FoundationDemoBundle\Form\Type;

use Flob\Bundle\FoundationBundle\Form\Type\ButtonBarType;
use Flob\Bundle\FoundationBundle\Form\Type\ButtonGroupType;
use Flob\Bundle\FoundationBundle\Form\Type\SliderType;
use Flob\Bundle\FoundationBundle\Form\Type\SwitchType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class KitchensinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = ['Choice 1' => 0, 'Choice 2' => 1, 'Obi wan kenobi' => 2];
        $builder
            ->add('text', TextType::class, [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['placeholder' => 'This is a placeholder'],
            ])
            ->add('textarea', TextareaType::class)
            ->add('email', EmailType::class)
            ->add('integer', IntegerType::class)
            ->add('money', MoneyType::class, [
                'currency' => 'EUR',
            ])
            ->add(
                $builder->create('sub-form', FormType::class)
                    ->add('subformemail1', EmailType::class, [
                        'constraints' => [
                            new Assert\NotBlank(),
                            new Assert\Email(),
                        ],
                        'attr' => ['placeholder' => 'email constraints'],
                        'label' => 'A custom label : ',
                    ])
                    ->add('subformtext1', TextType::class)
            )
            ->add('number', NumberType::class)
            ->add('password', PasswordType::class)
            ->add('percent', PercentType::class)
            ->add('search', SearchType::class)
            ->add('url', UrlType::class)
            ->add('choice1', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => true,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('choice1B', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => true,
                'label_attr' => ['class' => 'checkbox-inline'],
            ])
            ->add('choice1C', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => true,
                'label' => false,
                'label_attr' => ['class' => 'checkbox-inline'],
            ])
            ->add('choice2', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('choice3', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => true,
                'expanded' => false,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('choice4', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('checkbox', CheckboxType::class, [])
            ->add('radio', RadioType::class, [])
            ->add('country', CountryType::class)
            ->add('language', LanguageType::class)
            ->add('locale', LocaleType::class)
            ->add('timezone', TimezoneType::class, [])
            ->add('date', DateType::class, [])
            ->add('date_single_text', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('datetime', DateTimeType::class, [])
            ->add('datetime_single_text', DatetimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('time', TimeType::class, [
                'constraints' => new Assert\IsTrue(),
            ])
            ->add('time_single_text', TimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('birthday', BirthdayType::class, [
                'constraints' => new Assert\IsTrue(),
            ])
            ->add('file', FileType::class)
            ->add('password_repeated', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['required' => true],
                'first_options' => ['label' => 'Password field with his repeat'],
                'second_options' => ['label' => 'Repeat Password'],
            ])
            ->add('slider_h', SliderType::class, [
                'label' => 'Slider (horizontal)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
            ])
            ->add('slider_v', SliderType::class, [
                'label' => 'Slider (vertical)',
                'start' => 10,
                'end' => 20,
                'step' => 2,
                'vertical' => true,
            ])
            ->add('switch_radio', SwitchType::class, [
                'label' => 'Switches (as radio)',
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => false,
                'constraints' => new Assert\NotBlank(),
            ])
            ->add('switch_checkboxes', SwitchType::class, [
                'label' => 'Switches (as checkboxes)',
                'choices' => $choices,
                'choices_as_values' => true,
                'multiple' => true,
            ])
            ->add('button_group', ButtonGroupType::class, [
                'label' => 'Buttons group',
                'buttons' => [
                    'back' => [
                        'type' => ButtonType::class,
                        'options' => [
                            'label' => 'Cancel',
                            'attr' => [
                                'class' => 'secondary',
                            ],
                        ],
                    ],
                    'save' => [
                        'type' => SubmitType::class,
                        'options' => [
                            'label' => 'Submit',
                        ],
                    ],
                ],
                'attr' => [
                    'class' => 'right',
                ],
            ])
            ->add('button_bar', ButtonBarType::class, [
                'button_groups' => [
                    'button_group_first' => [
                        'label' => 'Buttons group',
                        'buttons' => [
                            'one' => [
                                'type' => SubmitType::class,
                                'options' => [
                                    'label' => 'one',
                                ],
                            ],
                            'two' => [
                                'type' => ButtonType::class,
                                'options' => [
                                    'label' => 'two',
                                    'attr' => [
                                        'class' => 'success',
                                    ],
                                ],
                            ],
                            'three' => [
                                'type' => ButtonType::class,
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
                                'type' => ButtonType::class,
                                'options' => [
                                    'label' => 'four',
                                    'attr' => [
                                        'class' => 'disabled',
                                    ],
                                ],
                            ],
                            'five' => [
                                'type' => ButtonType::class,
                                'options' => [
                                    'label' => 'five',
                                    'attr' => [
                                        'class' => 'secondary',
                                    ],
                                ],
                            ],
                            'six' => [
                                'type' => ButtonType::class,
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
}
