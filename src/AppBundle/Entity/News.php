<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 */
class News
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="artikel", type="text")
     */
    private $artikel;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="veroeffentlichungsdatum", type="datetimetz")
     */
    private $veroeffentlichungsdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelname", type="string", length=255)
     */
    private $artikelname;


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
     * Set artikel
     *
     * @param string $artikel
     *
     * @return News
     */
    public function setArtikel($artikel)
    {
        $this->artikel = $artikel;

        return $this;
    }

    /**
     * Get artikel
     *
     * @return string
     */
    public function getArtikel()
    {
        return $this->artikel;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return News
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set veroeffentlichungsdatum
     *
     * @param \DateTime $veroeffentlichungsdatum
     *
     * @return News
     */
    public function setVeroeffentlichungsdatum($veroeffentlichungsdatum)
    {
        $this->veroeffentlichungsdatum = $veroeffentlichungsdatum;

        return $this;
    }

    /**
     * Get veroeffentlichungsdatum
     *
     * @return \DateTime
     */
    public function getVeroeffentlichungsdatum()
    {
        return $this->veroeffentlichungsdatum;
    }

    /**
     * Set artikelname
     *
     * @param string artikelname
     *
     * @return News
     */
    public function setArtikelname($artikelname)
    {
        $this->artikelname = $artikelname;

        return $this;
    }

    /**
     * Get artikelname
     *
     * @return string
     */
    public function getArtikelname()
    {
        return $this->artikelname;
    }
}

