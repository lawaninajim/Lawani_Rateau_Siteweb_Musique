<?php


namespace JN\PlatformBundle\Form;


use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;



class ModificationPlaylistType extends AbstractType

{

  public function buildForm(FormBuilderInterface $builder, array $options)

  {

    $builder->remove('date');

  }


  public function getParent()

  {

    return PlaylistType::class;

  }

}


