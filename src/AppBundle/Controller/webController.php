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

class webController extends Controller
{
    /**
     * @Route("/", name="web_homepage")
     */
    public function homepageAction()
    {
        return $this->render('web/home.html.twig');
    }

    /**
     * @Route("/kontakt", name="web_kontakt")
     */
    public function kontaktAction()
    {
        return $this->render('web/kontakt.html.twig');
    }

    /**
     * @Route("/anmelden", name="web_anmelden")
     */
    public function anmeldenAction()
    {
        return $this->render('web/anmelden.html.twig');
    }
}