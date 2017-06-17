<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(name="Vorname", type="string", length=255)
     */
    private $vorname;

    /**
     * @var string
     *
     * @ORM\Column(name="Nachname", type="string", length=255)
     */
    private $nachname;

    /**
     * @var string
     *
     * @ORM\Column(name="Strasse", type="string", length=255)
     */
    private $strasse;

    /**
     * @var int
     *
     * @ORM\Column(name="Hausnummer", type="integer")
     */
    private $hausnummer;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefon", type="integer")
     */
    private $telefon;

    /**
     * @var int
     *
     * @ORM\Column(name="Postleitzahl", type="integer")
     */
    private $postleitzahl;

    /**
     * @var string
     *
     * @ORM\Column(name="Ort", type="string", length=255)
     */
    private $ort;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Geburtsdatum", type="datetime")
     */
    private $geburtsdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="Geburtsort", type="string", length=255)
     */
    private $geburtsort;

    /**
     * @var string
     *
     * @ORM\Column(name="Personalausweissnummer", type="string", length=255)
     */
    private $personalausweissnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="Familienstand", type="string", length=255)
     */
    private $familienstand;

    /**
     * @var string
     *
     * @ORM\Column(name="Steueridentifiktationsnummer", type="string", length=255)
     */
    private $steueridentifiktationsnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="Sozialversicherungsausweiss", type="string", length=255)
     */
    private $sozialversicherungsausweiss;

    /**
     * @var string
     *
     * @ORM\Column(name="Krankenkasse", type="string", length=255)
     */
    private $krankenkasse;

    /**
     * @var int
     *
     * @ORM\Column(name="Steuerklasse", type="integer")
     */
    private $steuerklasse;

    /**
     * @var string
     *
     * @ORM\Column(name="Bruttoarbeitslohn", type="decimal", precision=10, scale=0)
     */
    private $bruttoarbeitslohn;

    /**
     * @var string
     *
     * @ORM\Column(name="Arbeitsstunden", type="decimal", precision=10, scale=0)
     */
    private $arbeitsstunden;

    /**
     * @var string
     *
     * @ORM\Column(name="Bildungsabschluss", type="string", length=255)
     */
    private $bildungsabschluss;

    /**
     * @var string
     *
     * @ORM\Column(name="Abteilung", type="string", length=255)
     */
    private $abteilung;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=255)
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Einstellungsdatum", type="datetime")
     */
    private $einstellungsdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="Bewerbung", type="string", length=255)
     */
    private $bewerbung;

    /**
     * @var string
     *
     * @ORM\Column(name="Arbeitszeugnis", type="string", length=255)
     */
    private $arbeitszeugnis;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="EMail", type="string", length=255)
     */
    private $email;

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
     * Set vorname
     *
     * @param string $vorname
     *
     * @return Employee
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set nachname
     *
     * @param string $nachname
     *
     * @return Employee
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set strasse
     *
     * @param string $strasse
     *
     * @return Employee
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;

        return $this;
    }

    /**
     * Get strasse
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Set hausnummer
     *
     * @param integer $hausnummer
     *
     * @return Employee
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }

    /**
     * Get hausnummer
     *
     * @return int
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * Set telefon
     *
     * @param integer $telefon
     *
     * @return Employee
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return int
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set postleitzahl
     *
     * @param integer $postleitzahl
     *
     * @return Employee
     */
    public function setPostleitzahl($postleitzahl)
    {
        $this->postleitzahl = $postleitzahl;

        return $this;
    }

    /**
     * Get postleitzahl
     *
     * @return int
     */
    public function getPostleitzahl()
    {
        return $this->postleitzahl;
    }

    /**
     * Set ort
     *
     * @param string $ort
     *
     * @return Employee
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;

        return $this;
    }

    /**
     * Get ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set geburtsdatum
     *
     * @param \DateTime $geburtsdatum
     *
     * @return Employee
     */
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->geburtsdatum = $geburtsdatum;

        return $this;
    }

    /**
     * Get geburtsdatum
     *
     * @return \DateTime
     */
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * Set geburtsort
     *
     * @param string $geburtsort
     *
     * @return Employee
     */
    public function setGeburtsort($geburtsort)
    {
        $this->geburtsort = $geburtsort;

        return $this;
    }

    /**
     * Get geburtsort
     *
     * @return string
     */
    public function getGeburtsort()
    {
        return $this->geburtsort;
    }

    /**
     * Set personalausweissnummer
     *
     * @param string $personalausweissnummer
     *
     * @return Employee
     */
    public function setPersonalausweissnummer($personalausweissnummer)
    {
        $this->personalausweissnummer = $personalausweissnummer;

        return $this;
    }

    /**
     * Get personalausweissnummer
     *
     * @return string
     */
    public function getPersonalausweissnummer()
    {
        return $this->personalausweissnummer;
    }

    /**
     * Set familienstand
     *
     * @param string $familienstand
     *
     * @return Employee
     */
    public function setFamilienstand($familienstand)
    {
        $this->familienstand = $familienstand;

        return $this;
    }

    /**
     * Get familienstand
     *
     * @return string
     */
    public function getFamilienstand()
    {
        return $this->familienstand;
    }

    /**
     * Set steueridentifiktationsnummer
     *
     * @param string $steueridentifiktationsnummer
     *
     * @return Employee
     */
    public function setSteueridentifiktationsnummer($steueridentifiktationsnummer)
    {
        $this->steueridentifiktationsnummer = $steueridentifiktationsnummer;

        return $this;
    }

    /**
     * Get steueridentifiktationsnummer
     *
     * @return string
     */
    public function getSteueridentifiktationsnummer()
    {
        return $this->steueridentifiktationsnummer;
    }

    /**
     * Set sozialversicherungsausweiss
     *
     * @param string $sozialversicherungsausweiss
     *
     * @return Employee
     */
    public function setSozialversicherungsausweiss($sozialversicherungsausweiss)
    {
        $this->sozialversicherungsausweiss = $sozialversicherungsausweiss;

        return $this;
    }

    /**
     * Get sozialversicherungsausweiss
     *
     * @return string
     */
    public function getSozialversicherungsausweiss()
    {
        return $this->sozialversicherungsausweiss;
    }

    /**
     * Set krankenkasse
     *
     * @param string $krankenkasse
     *
     * @return Employee
     */
    public function setKrankenkasse($krankenkasse)
    {
        $this->krankenkasse = $krankenkasse;

        return $this;
    }

    /**
     * Get krankenkasse
     *
     * @return string
     */
    public function getKrankenkasse()
    {
        return $this->krankenkasse;
    }

    /**
     * Set steuerklasse
     *
     * @param integer $steuerklasse
     *
     * @return Employee
     */
    public function setSteuerklasse($steuerklasse)
    {
        $this->steuerklasse = $steuerklasse;

        return $this;
    }

    /**
     * Get steuerklasse
     *
     * @return int
     */
    public function getSteuerklasse()
    {
        return $this->steuerklasse;
    }

    /**
     * Set bruttoarbeitslohn
     *
     * @param string $bruttoarbeitslohn
     *
     * @return Employee
     */
    public function setBruttoarbeitslohn($bruttoarbeitslohn)
    {
        $this->bruttoarbeitslohn = $bruttoarbeitslohn;

        return $this;
    }

    /**
     * Get bruttoarbeitslohn
     *
     * @return string
     */
    public function getBruttoarbeitslohn()
    {
        return $this->bruttoarbeitslohn;
    }

    /**
     * Set arbeitsstunden
     *
     * @param string $arbeitsstunden
     *
     * @return Employee
     */
    public function setArbeitsstunden($arbeitsstunden)
    {
        $this->arbeitsstunden = $arbeitsstunden;

        return $this;
    }

    /**
     * Get arbeitsstunden
     *
     * @return string
     */
    public function getArbeitsstunden()
    {
        return $this->arbeitsstunden;
    }

    /**
     * Set bildungsabschluss
     *
     * @param string $bildungsabschluss
     *
     * @return Employee
     */
    public function setBildungsabschluss($bildungsabschluss)
    {
        $this->bildungsabschluss = $bildungsabschluss;

        return $this;
    }

    /**
     * Get bildungsabschluss
     *
     * @return string
     */
    public function getBildungsabschluss()
    {
        return $this->bildungsabschluss;
    }

    /**
     * Set abteilung
     *
     * @param string $abteilung
     *
     * @return Employee
     */
    public function setAbteilung($abteilung)
    {
        $this->abteilung = $abteilung;

        return $this;
    }

    /**
     * Get abteilung
     *
     * @return string
     */
    public function getAbteilung()
    {
        return $this->abteilung;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Employee
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set einstellungsdatum
     *
     * @param \DateTime $einstellungsdatum
     *
     * @return Employee
     */
    public function setEinstellungsdatum($einstellungsdatum)
    {
        $this->einstellungsdatum = $einstellungsdatum;

        return $this;
    }

    /**
     * Get einstellungsdatum
     *
     * @return \DateTime
     */
    public function getEinstellungsdatum()
    {
        return $this->einstellungsdatum;
    }

    /**
     * Set bewerbung
     *
     * @param string $bewerbung
     *
     * @return Employee
     */
    public function setBewerbung($bewerbung)
    {
        $this->bewerbung = $bewerbung;

        return $this;
    }

    /**
     * Get bewerbung
     *
     * @return string
     */
    public function getBewerbung()
    {
        return $this->bewerbung;
    }

    /**
     * Set arbeitszeugnis
     *
     * @param string $arbeitszeugnis
     *
     * @return Employee
     */
    public function setArbeitszeugnis($arbeitszeugnis)
    {
        $this->arbeitszeugnis = $arbeitszeugnis;

        return $this;
    }

    /**
     * Get arbeitszeugnis
     *
     * @return string
     */
    public function getArbeitszeugnis()
    {
        return $this->arbeitszeugnis;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Employee
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }
    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
