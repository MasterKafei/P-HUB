<?php


namespace AppBundle\Form\Type\Admin\ImplantModel\Edition;


use AppBundle\Entity\Implant;
use AppBundle\Entity\ImplantModel;
use AppBundle\Form\Type\Admin\File\Edition\EditFileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditImplantModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'icon' => 'fas fa-id-card',
                    'placeholder' => 'Nom',
                )
            ))
            ->add('description', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Description'
                )
            ))
            ->add('image', EditFileType::class, array(
                'attr' => array(
                    'icon' => 'fas fa-images'
                ),
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ImplantModel::class
        ));
    }
}