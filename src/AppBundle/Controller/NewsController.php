<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 17.05.2017
 * Time: 06:34
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/News/{Titel}/{Text}")
     */
    public function showAction($Titel, $Text)
    {
        $Titel = "Hier ist die Überschrift";
        $Text = "Hallo hier folgt der Text";
        $templating = $this->container->get('templating');
        $html = $templating->render('default/show.html.twig', [
            'news' => $Titel,
            'text' => $Text
    ]);
        return new Response($html);

    }
}