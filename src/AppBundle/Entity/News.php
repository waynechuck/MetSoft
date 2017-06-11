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
     //@TODO auto_increment ist evil aufm PK, nicht verwenden
     //@TODO Besser ist, UUID erzeugen und per md5 hash eine (DB)unique id erzeugen
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
    //@TODO author was? Der name des Autors? Das wäre schlecht, weil du so den Autor nicht spezifizieren kannst -> Neue Tabelle (könnte ja zb auch ein Mitarbeiter sein...) für Autor und hier nur die id angeben
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var \DateTime
    //@TODO typo in word, entweder camelCase oder underscore_case (underscore_case ist besser für DB)
     * @ORM\Column(name="veroeffentlichungsdatum", type="datetimetz")
     */
    //Todo typo in word..
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
        //@TODO warum returnst du hier $this wenn du am Ende noch nicht chainst?
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
        //@TODO warum returnst du hier $this wenn du am Ende noch nicht chainst?
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
        //@TODO warum returnst du hier $this wenn du am Ende noch nicht chainst?
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
        //@TODO warum returnst du hier $this wenn du am Ende noch nicht chainst?
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

