<?php
/**
 * Created by PhpStorm.
 * User: Micha
 * Date: 18.05.2017
 * Time: 05:50
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function IndexAction()
    {
        $templating = $this->container->get('templating');
        $html = $templating->render('home.html.twig', [
        ]);

        return new Response($html);
    }

}