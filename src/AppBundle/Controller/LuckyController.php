<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 27.05.2017
 * Time: 10:28
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky.html.twig', array(
            'number' => $number,
        ));
    }
}