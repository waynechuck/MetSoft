<?php
/**
 * Created by PhpStorm.
 * User: Michael Trotzer
 * Date: 01.06.2017
 * Time: 00:30
 */

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Include everything for the Forms
 */

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class newsController extends Controller
{

    public function listAction()
    {
        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findAll();

        return $this->render('news/index.html.twig', array(
            'news' => $news
        ));
    }

    public function createAction(Request $request)
    {
        $news = new news;

        $form =$this->createFormBuilder($news)
            ->add('article', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' =>'margin-bottom:15px')))
            ->add('author', TextType::class, array('attr' => array('class' => 'form-control', 'style' =>'margin-bottom:15px')))
            ->add('publicationdate', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' =>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create News', 'attr' => array('class' => 'btn btn-primary', 'style' =>'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //getData
            $article = $form['article']->getData();
            $author = $form['author']->getData();
            $publicationdate = $form['publicationdate']->getData();

            $now = new\DateTime('now');

            $news->setArticle($article);
            $news->setAuthor($author);
            $news->setPublicationdate($publicationdate);
            $news->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($news);
            $em->flush();

            $this->addFlash(
                'notice',
                'News Added'
            );

            return $this->redirectToRoute('news_list');
        }

        return $this->render('news/create.html.twig', array(
            'form' => $form->createView()
        ));
    }
}