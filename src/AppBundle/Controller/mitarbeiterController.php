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

use AppBundle\Entity\Mitarbeiter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Include everything for the Forms
 */

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class mitarbeiterController extends Controller
{
    public function anzeigenAction()
    {
        $mitarbeiter = $this->getDoctrine()
            ->getRepository('AppBundle:Mitarbeiter')
            ->findAll();

        return $this->render('mitarbeiter/anzeigen.html.twig', array(
            'mitarbeiter' => $mitarbeiter
        ));
    }

    public function erstellenAction(Request $request)
    {
        $mitarbeiter = new mitarbeiter;

        $form = $this->createFormBuilder($mitarbeiter)
            ->add('vorname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('nachname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('strasse', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('hausnummer', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('postleitzahl', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('ort', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsdatum', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('geburtsort', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('personalausweissnummer', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('familienstand', ChoiceType::class, array('choices' => array('ledig' => 'ledig', 'verheiratet' => 'verheiratet', 'High' => 'High'), 'attr' => array('class' => 'form-control', 'style' =>'margin-bottom:15px')))

            ->add('saveAndAdd', SubmitType::class, array('label' => 'Speichern und fortführen', 'attr' => array('class' => 'btn btn-primary', 'style' =>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Erstelle Mitarbeiter', 'attr' => array('class' => 'btn btn-primary', 'style' =>'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Speichern und fortführen Button
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'task_new'
                : 'task_success';

            return $this->redirectToRoute($nextAction);

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

            $mitarbeiter->setVorname($vorname);
            $mitarbeiter->setNachname($nachname);
            $mitarbeiter->setStrasse($strasse);
            $mitarbeiter->setHausnummer($hausnummer);
            $mitarbeiter->setPostleitzahl($postleitzahl);
            $mitarbeiter->setOrt($ort);
            $mitarbeiter->setGeburtsdatum($geburtsdatum);
            $mitarbeiter->setGeburtsort($geburtsort);
            $mitarbeiter->setFamilienstand($familienstand);
            $mitarbeiter->setPersonalausweissnummer($personalausweissnummer);

            $em = $this->getDoctrine()->getManager();

            $em->persist($mitarbeiter);
            $em->flush();

            $this->addFlash(
                'notice',
                'Der Mitarbeiter wurde erstellt!'
            );

            return $this->redirectToRoute('Mitarbeiter_erstellen');
        }

        return $this->render('mitarbeiter/erstellen.html.twig', array(
            'form' => $form->createView()
        ));
    }
}