<?php
/**
 * Created by PhpStorm.
 * User: Micha
 * Date: 06.06.2017
 * Time: 04:45
 */

namespace AppBundle\Controller;

/**
 * Include everything else
 */

use AppBundle\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Include everything for the Forms
 */

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

//@TODO KlassenName groß, wir sind im englischen -> keine deutschen Bezeichner
class EmployeeController extends Controller
{
    //@TODO Schreibfehler und englisch bitte

    //@TODO englisch
    public function indexAction()
    {
        //@TODO englisch
        $employee = $this->getDoctrine()
            ->getRepository('AppBundle:Employee')
            ->findAll();

        return $this->render('employee/index.html.twig', array(
            'employee' => $employee
        ));
    }

    //@TODO englisch (in der gesamten Methode) und Leerzeile zwischen den Methoden

    //@TODO englisch
    public function createAction(Request $request)
    {
        $employee = new Employee;
        //@TODO wer soll hier durchschauen? Versuch das mal übersichtlicher zu gestalten
        $form = $this->createFormBuilder($employee)
            //TextType:
            //@TODO wenn wir php7 vorraussetzen, dann können wir auch die kurze array Syntax verwenden
            ->add('vorname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('nachname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('strasse', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('hausnummer', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('ort', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsort', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('sozialversicherungsausweiss', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bruttoarbeitslohn', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bewerbung', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('foto', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('arbeitszeugnis', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('personalausweissnummer', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bildungsabschluss', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('krankenkasse', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // E-MailType
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // NumberType
            ->add('steueridentifiktationsnummer', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('arbeitsstunden', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('postleitzahl', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('telefon', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ChoiceType
            ->add('familienstand', ChoiceType::class, array('choices' => array(
                'ledig' => 'ledig',
                'verheiratet' => 'verheiratet',
                'verwitwet' => 'verwitwet',
                'geschieden' => 'geschieden',
                'Ehe aufgehoben' => 'Ehe aufgehoben',
                'in eingetragener Lebenspartnerschaft' => 'in eingetragener Lebenspartnerschaft',
                'durch Tod aufgelöste Lebenspartnerschaft' => 'durch Tod aufgelöste Lebenspartnerschaft',
                'aufgehobene Lebenspartnerschaft' => 'aufgehobene Lebenspartnerschaft',
                'durch Todeserklärung aufgelöste Lebenspartnerschaft' => 'durch Todeserklärung aufgelöste Lebenspartnerschaft',
                'nicht bekannt' => 'nicht bekannt'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('abteilung', ChoiceType::class, array('choices' => array(
                'Name der Abteilung' => 'Name der Abteilung',
                'Name der Abteilung1' => 'Name der Abteilung1'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('position', ChoiceType::class, array('choices' => array(
                'Employee' => 'Employee',
                'Teamleiter' => 'Teamleiter',
                'Kitaleiter' => 'Kitaleiter',
                'Geschäftsführer' => 'Geschäftsführer'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('steuerklasse', ChoiceType::class, array('choices' => array(
                'eins' => 'I',
                'zwei' => 'II',
                'drei' => 'III',
                'vier' => 'IV',
                'fünf' => 'V',
                'sechs' => 'VI'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            //DateType + BirthsdayType Typen

            ->add('einstellungsdatum', DateType::class, array(
                'placeholder' => array(
                    'year' => 'Jahr', 'month' => 'Monat', 'day' => 'Tag'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsdatum', BirthdayType::class, array(
                'placeholder' => array(
                    'year' => 'Jahr',
                    'month' => 'Monat',
                    'day' => 'Tag'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // Bestätigungbutton um das Formular zu übernehmen
            ->add('save', SubmitType::class, array('label' => 'Erstelle Employee', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //getData
            //Persönliche Daten
            $vorname = $form['vorname']->getData();
            $nachname = $form['nachname']->getData();
            $strasse = $form['strasse']->getData();
            $hausnummer = $form['hausnummer']->getData();
            $postleitzahl = $form['postleitzahl']->getData();
            $ort = $form['ort']->getData();
            $geburtsdatum = $form['geburtsdatum']->getData();
            $geburtsort = $form['geburtsort']->getData();
            $familienstand = $form['familienstand']->getData();
            $personalausweissnummer = $form['personalausweissnummer']->getData();
            $telefon = $form['telefon']->getData();

            // Unternehmensdaten
            $abteilung = $form['abteilung']->getData();
            $position = $form['position']->getData();
            $einstellungsdatum = $form['einstellungsdatum']->getData();
            $steuerklasse = $form['steuerklasse']->getData();
            $steueridentifiktationsnummer = $form['steueridentifiktationsnummer']->getData();
            $arbeitsstunden = $form['arbeitsstunden']->getData();
            $krankenkasse = $form['krankenkasse']->getData();
            $bildungsabschluss = $form['bildungsabschluss']->getData();

            // Alle anderen zum einordnen:
            $sozialversicherungsausweiss = $form['sozialversicherungsausweiss']->getData();
            $bruttoarbeitslohn = $form['bruttoarbeitslohn']->getData();
            $bewerbung = $form['bewerbung']->getData();
            $foto = $form['foto']->getData();
            $arbeitszeugnis = $form['arbeitszeugnis']->getData();
            $email = $form ['email']->getData();

            //data
            $employee->setVorname($vorname);
            $employee->setNachname($nachname);
            $employee->setStrasse($strasse);
            $employee->setHausnummer($hausnummer);
            $employee->setPostleitzahl($postleitzahl);
            $employee->setOrt($ort);
            $employee->setGeburtsdatum($geburtsdatum);
            $employee->setGeburtsort($geburtsort);
            $employee->setFamilienstand($familienstand);
            $employee->setPersonalausweissnummer($personalausweissnummer);
            $employee->setTelefon($telefon);

            // Unternehmensdaten
            $employee->setAbteilung($abteilung);
            $employee->setPosition($position);
            $employee->setEinstellungsdatum($einstellungsdatum);
            $employee->setSteuerklasse($steuerklasse);
            $employee->setSteueridentifiktationsnummer($steueridentifiktationsnummer);
            $employee->setArbeitsstunden($arbeitsstunden);
            $employee->setKrankenkasse($krankenkasse);
            $employee->setBildungsabschluss($bildungsabschluss);
            // Alle anderen zum einordnen:
            $employee->setSozialversicherungsausweiss($sozialversicherungsausweiss);
            $employee->setBruttoarbeitslohn($bruttoarbeitslohn);
            $employee->setBewerbung($bewerbung);
            $employee->setFoto($foto);
            $employee->setArbeitszeugnis($arbeitszeugnis);
            $employee->setEmail($email);

            $em = $this->getDoctrine()->getManager();

            $em->persist($employee);
            $em->flush();

            $this->addFlash(
                'notice',
                'Der Employee wurde erstellt!'
            );
            //@TODO nur ein ausgang aus jeder Methode (hir gibt es 2 returns)
            return $this->redirectToRoute('employee_index');
        }

        return $this->render('employee/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * detailsAction wird hier definiert!
     */
    //@TODO englisch
    public function detailsAction($id)
    {

        $employee = $this->getDoctrine()
            ->getRepository('AppBundle:Employee')
            ->find($id);

        return $this->render('employee/details.html.twig', array(
            'employee' => $employee
        ));
    }

    /**
     * löschenAction wird hier definiert!
     */
    //@TODO englisch
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $employee = $em->getRepository('AppBundle:Employee')->find($id);

        $em->remove($employee);
        $em->flush();

        $this->addFlash(
            'notice',
            'Employee gelöscht!'
        );

        return $this->redirectToRoute('employee_index');
    }

    /**
     * bearbeitungAction wird hier definiert!
     */
    //@TODO englisch
    public function editAction($id, Request $request)
    {
        $employee = $this->getDoctrine()
            ->getRepository('AppBundle:Employee')
            ->find($id);

        $employee->setVorname($employee->getVorname());
        $employee->setNachname($employee->getNachname());
        $employee->setStrasse($employee->getStrasse());
        $employee->setHausnummer($employee->getHausnummer());
        $employee->setPostleitzahl($employee->getPostleitzahl());
        $employee->setOrt($employee->getOrt());
        $employee->setGeburtsdatum($employee->getGeburtsdatum());
        $employee->setGeburtsort($employee->getGeburtsort());
        $employee->setFamilienstand($employee->getFamilienstand());
        $employee->setPersonalausweissnummer($employee->getPersonalausweissnummer());
        $employee->setTelefon($employee->getTelefon());

        // Unternehmensdaten
        $employee->setAbteilung($employee->getAbteilung());
        $employee->setPosition($employee->getPosition());
        $employee->setEinstellungsdatum($employee->getEinstellungsdatum());
        $employee->setSteuerklasse($employee->getSteuerklasse());
        $employee->setSteueridentifiktationsnummer($employee->getSteueridentifiktationsnummer());
        $employee->setArbeitsstunden($employee->getArbeitsstunden());
        $employee->setKrankenkasse($employee->getKrankenkasse());
        $employee->setBildungsabschluss($employee->getBildungsabschluss());
        // Alle anderen zum einordnen:
        $employee->setSozialversicherungsausweiss($employee->getSozialversicherungsausweiss());
        $employee->setBruttoarbeitslohn($employee->getBruttoarbeitslohn());
        $employee->setBewerbung($employee->getBewerbung());
        $employee->setFoto($employee->getFoto());
        $employee->setArbeitszeugnis($employee->getArbeitszeugnis());
        $employee->setEmail($employee->getEmail());

        $form = $this->createFormBuilder($employee)
            //TextType:
            ->add('vorname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('nachname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('strasse', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('hausnummer', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('ort', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsort', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('sozialversicherungsausweiss', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bruttoarbeitslohn', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bewerbung', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('foto', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('arbeitszeugnis', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('personalausweissnummer', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('bildungsabschluss', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('krankenkasse', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // E-MailType
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // NumberType
            ->add('steueridentifiktationsnummer', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('arbeitsstunden', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('postleitzahl', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('telefon', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ChoiceType
            ->add('familienstand', ChoiceType::class, array('choices' => array(
                'ledig' => 'ledig',
                'verheiratet' => 'verheiratet',
                'verwitwet' => 'verwitwet',
                'geschieden' => 'geschieden',
                'Ehe aufgehoben' => 'Ehe aufgehoben',
                'in eingetragener Lebenspartnerschaft' => 'in eingetragener Lebenspartnerschaft',
                'durch Tod aufgelöste Lebenspartnerschaft' => 'durch Tod aufgelöste Lebenspartnerschaft',
                'aufgehobene Lebenspartnerschaft' => 'aufgehobene Lebenspartnerschaft',
                'durch Todeserklärung aufgelöste Lebenspartnerschaft' => 'durch Todeserklärung aufgelöste Lebenspartnerschaft',
                'nicht bekannt' => 'nicht bekannt'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('abteilung', ChoiceType::class, array('choices' => array(
                'Name der Abteilung' => 'Name der Abteilung',
                'Name der Abteilung1' => 'Name der Abteilung1'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('position', ChoiceType::class, array('choices' => array(
                'Employee' => 'Employee',
                'Teamleiter' => 'Teamleiter',
                'Kitaleiter' => 'Kitaleiter',
                'Geschäftsführer' => 'Geschäftsführer'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('steuerklasse', ChoiceType::class, array('choices' => array(
                'eins' => 'I',
                'zwei' => 'II',
                'drei' => 'III',
                'vier' => 'IV',
                'fünf' => 'V',
                'sechs' => 'VI'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            //DateType + BirthsdayType Typen

            ->add('einstellungsdatum', DateType::class, array(
                'placeholder' => array(
                    'year' => 'Jahr', 'month' => 'Monat', 'day' => 'Tag'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsdatum', BirthdayType::class, array(
                'placeholder' => array(
                    'year' => 'Jahr',
                    'month' => 'Monat',
                    'day' => 'Tag'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))

            // Bestätigungbutton um das Formular zu übernehmen
            ->add('save', SubmitType::class, array('label' => 'Erstelle Employee', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //getData

            $vorname = $form['vorname']->getData();
            $nachname = $form['nachname']->getData();
            $strasse = $form['strasse']->getData();
            $hausnummer = $form['hausnummer']->getData();
            $postleitzahl = $form['postleitzahl']->getData();
            $ort = $form['ort']->getData();
            $geburtsdatum = $form['geburtsdatum']->getData();
            $geburtsort = $form['geburtsort']->getData();
            $familienstand = $form['familienstand']->getData();
            $personalausweissnummer = $form['personalausweissnummer']->getData();
            $telefon = $form['telefon']->getData();

            // Unternehmensdaten
            $abteilung = $form['abteilung']->getData();
            $position = $form['position']->getData();
            $einstellungsdatum = $form['einstellungsdatum']->getData();
            $steuerklasse = $form['steuerklasse']->getData();
            $steueridentifiktationsnummer = $form['steueridentifiktationsnummer']->getData();
            $arbeitsstunden = $form['arbeitsstunden']->getData();
            $krankenkasse = $form['krankenkasse']->getData();
            $bildungsabschluss = $form['bildungsabschluss']->getData();

            // Alle anderen zum einordnen:
            $sozialversicherungsausweiss = $form['sozialversicherungsausweiss']->getData();
            $bruttoarbeitslohn = $form['bruttoarbeitslohn']->getData();
            $bewerbung = $form['bewerbung']->getData();
            $foto = $form['foto']->getData();
            $arbeitszeugnis = $form['arbeitszeugnis']->getData();
            $email = $form ['email']->getData();

            $em = $this->getDoctrine()->getManager();
            $employee = $em->getRepository('AppBundle:Employee')->find($id);

            $employee->setVorname($vorname);
            $employee->setNachname($nachname);
            $employee->setStrasse($strasse);
            $employee->setHausnummer($hausnummer);
            $employee->setPostleitzahl($postleitzahl);
            $employee->setOrt($ort);
            $employee->setGeburtsdatum($geburtsdatum);
            $employee->setGeburtsort($geburtsort);
            $employee->setFamilienstand($familienstand);
            $employee->setPersonalausweissnummer($personalausweissnummer);
            $employee->setTelefon($telefon);

            // Unternehmensdaten
            $employee->setAbteilung($abteilung);
            $employee->setPosition($position);
            $employee->setEinstellungsdatum($einstellungsdatum);
            $employee->setSteuerklasse($steuerklasse);
            $employee->setSteueridentifiktationsnummer($steueridentifiktationsnummer);
            $employee->setArbeitsstunden($arbeitsstunden);
            $employee->setKrankenkasse($krankenkasse);
            $employee->setBildungsabschluss($bildungsabschluss);
            // Alle anderen zum einordnen:
            $employee->setSozialversicherungsausweiss($sozialversicherungsausweiss);
            $employee->setBruttoarbeitslohn($bruttoarbeitslohn);
            $employee->setBewerbung($bewerbung);
            $employee->setFoto($foto);
            $employee->setArbeitszeugnis($arbeitszeugnis);
            $employee->setEmail($email);

            $em->flush();

            $this->addFlash(
                'notice',
                'Employee bearbeitet!'
            );

            return $this->redirectToRoute('employee_index');
        }

        return $this->render('employee/create.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView()
        ));
    }
}