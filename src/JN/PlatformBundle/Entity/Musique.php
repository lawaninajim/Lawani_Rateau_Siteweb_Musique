<?php

// src/JN/PlatformBundle/Entity/Musique.php


namespace JN\PlatformBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**

 * @ORM\Entity(repositoryClass="JN\PlatformBundle\Entity\MusiqueRepository")

 */

class Musique

{

   /**

   * @ORM\ManyToOne(targetEntity="JN\PlatformBundle\Entity\Playlist", inversedBy="musiques")

   * @ORM\JoinColumn(nullable=false)

   */

  private $advert;


  /**

   * @ORM\Column(name="id", type="integer")

   * @ORM\Id

   * @ORM\GeneratedValue(strategy="AUTO")

   */

  private $id;


  /**

   * @ORM\Column(name="auteur", type="string", length=255)

   */

  private $auteur;
  
 

  /**

   * @ORM\Column(name="content", type="text")

   */

  private $lien;


  /**

   * @ORM\Column(name="date", type="datetime")

   */

  private $date;

  

  public function __construct()

  {

    $this->date = new \Datetime();

  }


  public function getId()

  {

    return $this->id;

  }


  
  
    public function setAdvert(Playlist $advert)

  {

    $this->advert = $advert;


    return $this;

  }


  public function getAdvert()

  {

    return $this->advert;
  }

  public function setContent($content)

  {

    $this->content = $content;


    return $this;

  }


  public function getContent()

  {

    return $this->content;

  }


  public function setDate($date)

  {

    $this->date = $date;


    return $this;

  }


  public function getDate()

  {

    return $this->date;

  }


    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Musique
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

   
    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Musique
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }
}
