<?php
namespace JN\PlatformBundle\Entity;


use Doctrine\ORM\EntityRepository;


class AdvertRepository extends EntityRepository

{

  public function getAdverts()

  {

    $query = $this->createQueryBuilder('a')

      // Jointure sur l'attribut image

      ->leftJoin('a.image', 'i')

      ->addSelect('i')

      ->orderBy('a.date', 'DESC')

      ->getQuery()

    ;


    return $query->getResult();

  }

}
