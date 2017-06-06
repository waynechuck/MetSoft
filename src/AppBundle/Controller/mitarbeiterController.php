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
            ->add('abteilung', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Erstelle Mitarbeiter', 'attr' => array('class' => 'btn btn-primary', 'style' =>'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //getData
            $vorname = $form['vorname']->getData();
            $nachname = $form['nachname']->getData();
            $abteilung = $form['abteilung']->getData();

            $mitarbeiter->setVorname($vorname);
            $mitarbeiter->setNachname($nachname);
            $mitarbeiter->setAbteilung($abteilung);

            $em = $this->getDoctrine()->getManager();

            $em->persist($mitarbeiter);
            $em->flush();

            $this->addFlash(
                'notice',
                'Mitarbeiter Updated'
            );

            return $this->redirectToRoute('Mitarbeiter_erstellen');
        }

        return $this->render('mitarbeiter/erstellen.html.twig', array(
            'form' => $form->createView()
        ));
    }
}