<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MailerFormType extends AbstractType
{

    const OBJ = 'Veuillez chosir un objet';
    const RDV = 'Prise de rendez-vous';
    const CANCEL = 'Annuler un rendez-vous';
    const RENS = 'Demande de renseignement';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => false])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'exemple@mail.com',
                ],
            ])
            ->add('phone', TelType::class, [
                'label' => false,
            
                'attr' => [
                    'pattern'=> '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]',
                    'placeholder' => '0123456789',
                ],
            ])
            ->add('objet', ChoiceType::class, [
                'choices' => [
                    'Prise de rendez-vous' => self::RDV,
                    'Annuler un rendez-vous' => self::CANCEL,
                    'Demande de renseignement' => self::RENS,
                ],
                'label' => false,
                'placeholder' => self::OBJ,
            ])
            ->add('message', TextareaType::class, ['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
