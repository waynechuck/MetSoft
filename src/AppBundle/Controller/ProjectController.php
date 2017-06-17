<?php
/**
 * Created by PhpStorm.
 * User: Micha
 * Date: 08.06.2017
 * Time: 06:36
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller
{

    public function indexAction()
    {
        return $this->render('project/index.html.twig');
    }
}