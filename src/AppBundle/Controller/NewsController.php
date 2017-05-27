<?php
/**
 * Created by PhpStorm.
 * User: Micha
 * Date: 27.05.2017
 * Time: 10:35
 */

namespace AppBundle\Controller;


class NewsController
{
    public function showAction()
    {
        return $this->render('base.html.twig');
    }
}