<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 28.05.2017
 * Time: 06:01
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction()
    {
        return $this->render('backend/todo/index.html.twig');
    }

    /**
     * @Route("/todos/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('backend/todo/create.html.twig');
    }

    /**
     * @Route("/todos/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('backend/todo/edit.html.twig');
    }

    /**
     * @Route("/todos/details/{id}", name="todo_details")
     */
    public function detailsAction($id)
    {
        return $this->render('backend/todo/details.html.twig');
    }
}