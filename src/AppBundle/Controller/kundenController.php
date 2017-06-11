<?php
/**
 * Created by PhpStorm.
 * User: Micha
 * Date: 08.06.2017
 * Time: 06:36
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class kundenController extends Controller
{

    public function anzeigenAction()
    {
        return $this->render('kunden/index.html.twig');
    }
}