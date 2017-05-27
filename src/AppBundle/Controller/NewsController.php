<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 17.05.2017
 * Time: 06:34
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function showAction()
    {
        return $this->render('home.html.twig');

    }
}