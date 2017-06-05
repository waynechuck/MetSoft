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

    public function startseiteAction()
    {
        return $this->render('web/home.html.twig');
    }

    public function kontaktAction()
    {
        return $this->render('web/kontakt.html.twig');
    }

    public function anmeldenAction()
    {
        return $this->render('web/anmelden.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('dash/index.html.twig');
    }
}