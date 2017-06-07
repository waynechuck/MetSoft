<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 07.06.2017
 * Time: 21:06
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class finanzenController extends Controller
{
    public function anzeigenAction()
    {
        return $this->render('finanzen/anzeigen.html.twig');
    }
}