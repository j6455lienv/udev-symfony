<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    /**
     *
     * @Route("/articles", name="articles")
     */
    //READ -> CRUD pour ARTICLE
    public function articleAction(Request $request)
    {
        // afficher elements de la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $repositery = $entityManager->getRepository('AppBundle:Article');
        $articles = $repositery->findAll();

        //autre requettes possible
        //$article1 = $repositery->find(1);
        //$article2 = $repositery->findOneBy(['id' => 1]);
        //$articlesDesc = $repositery->findBy([], ['id' => 'desc']);

        return $this->render('articles/articles.html.twig', [
            'articles' => $articles,
        ]);

    }

}