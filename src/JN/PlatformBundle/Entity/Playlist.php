<?php

namespace JN\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Playlist
 *
 * @ORM\Table(name="playlist")
 * @ORM\Entity(repositoryClass="JN\PlatformBundle\Repository\PlaylistRepository")
 */
class Playlist
{

/**

   * @ORM\Column(name="artiste", type="string", length=255)
   * @Assert\Length(min=2)
   */
  private $artiste;

/**

  * @ORM\OneToOne(targetEntity="JN\PlatformBundle\Entity\Image", cascade={"persist"})

  * @ORM\JoinColumn(nullable=false)
  * @Assert\Valid()
  */

private $image;

   

/**

 * @ORM\Column(name="updated_at", type="datetime", nullable=true)

 */

private $updatedAt;

    /**

   * @ORM\OneToMany(targetEntity="JN\PlatformBundle\Entity\Musique", mappedBy="playlist")

   */

  private $musiques; 

    


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     *@Assert\DateTime()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\Length(min=3)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Auteur", type="string", length=255)
     * @Assert\Length(min=3)
     */

    private $author;

    
    
  /**

   * @ORM\Column(name="content", type="text")
   * @Assert\NotBlank()
   */
    private $content;

    /**

   * @ORM\Column(name="published", type="boolean")

   */

  private $published = true;

  
 




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Playlist
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Playlist
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

        public function __construct()
    {
	$this->date = new \Datetime();
     	$this->publication = true;
	$this->musiques = new ArrayCollection();
    }
 

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Playlist
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Playlist
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    public function addMusique(Musique $musique)

  {

    $this->musiques[] = $musique;


    return $this;

  }


  public function removeMusique(Musique $musique)

  {

    $this->musiques->removeElement($musique);

  }


  public function getMusiques()

  {

    return $this->musiques;
  }
    /**
     * Set author
     *
     * @param string $author
     *
     * @return Playlist
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    public function updateDate()

  {

    $this->setUpdatedAt(new \Datetime());

  }
    
    

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Playlist
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
     /**
     * Set artiste
     *
     * @param string $artiste
     *
     * @return Musique
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return string
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set image
     *
     * @param \JN\PlatformBundle\Entity\Image $image
     *
     * @return Playlist
     */
    public function setImage(\JN\PlatformBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \JN\PlatformBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
