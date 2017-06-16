<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 28.05.2017
 * Time: 09:17
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebsiteController extends Controller
{

    public function homepageAction()
    {
        return $this->render('website/homepage.html.twig');
    }

    public function contactAction()
    {
        return $this->render('website/contact.html.twig');
    }

    public function sign_inAction()
    {
        return $this->render('website/sign_in.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('dashboard/index.html.twig');
    }
}