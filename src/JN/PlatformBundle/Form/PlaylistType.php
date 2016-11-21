<?php

namespace JN\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;

use Symfony\Component\Form\FormEvents;

use Symfony\Component\OptionsResolver\OptionsResolver;

;

class PlaylistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('date',      DateTimeType::class)

      ->add('title',     TextType::class)
     
      ->add('artiste',   TextType::class)

      ->add('author',    TextType::class)

      ->add('content',   TextareaType::class)

      ->add('image',     ImageType::class) 

      ->add('published', CheckboxType::class, array('required' => false))

      ->add('save',      SubmitType::class);
    
	$builder->addEventListener(

      FormEvents::PRE_SET_DATA,

      function(FormEvent $event) {

        $advert = $event->getData();


        if (null === $advert) {

          return;

        }


        if (!$advert->getPublished() || null === $advert->getId()) {

          $event->getForm()->add('published', CheckboxType::class, array('required' => false));

        } else {

          $event->getForm()->remove('published');

        }

      }

    );
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JN\PlatformBundle\Entity\Playlist'
        ));
    }
}
