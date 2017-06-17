<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 07.06.2017
 * Time: 21:06
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FinanceController extends Controller
{
    public function indexAction()
    {
        return $this->render('finance/index.html.twig');
    }
}