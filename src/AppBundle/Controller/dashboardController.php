<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 02.06.2017
 * Time: 03:05
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class dashboardController extends Controller
{
    public function indexAction(){

        return $this->render('dashboard/index.html.twig');

    }

}