<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 01.06.2017
 * Time: 00:30
 */

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class newsController extends Controller
{
    /**
     * @Route("/news", name="news_list")
     */
    public function listAction()
    {
        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findAll();

        return $this->render('news/index.html.twig', array(
            'news' => $news
        ));
    }
}