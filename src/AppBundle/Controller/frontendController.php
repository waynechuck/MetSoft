<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 28.05.2017
 * Time: 09:17
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class frontendController extends Controller
{
    /**
     * @Route("/", name="frontend_homepage")
     */
    public function homepageAction()
    {
        return $this->render('Frontend/home.html.twig');
    }

    /**
     * @Route("/kontakt", name="frontend_kontakt")
     */
    public function kontaktAction()
    {
        return $this->render('Frontend/kontakt.html.twig');
    }

    /**
     * @Route("/anmelden", name="frontend_anmelden")
     */
    public function anmeldenAction()
    {
        return $this->render('Frontend/anmelden.html.twig');
    }
}