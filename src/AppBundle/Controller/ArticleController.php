<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{

    /**
     *
     * @Route("/articles", name="homepage-tp")
     */
// En gros c'est notre READ du CRUD pour ARTICLE (affichage du contenu de la table article)
    public function articleAction(Request $request)
    {
// afficher elements de la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $repositery = $entityManager->getRepository('AppBundle:Article');
        $article1 = $repositery->find(1);
        $article2 = $repositery->findOneBy(['id' => 1]);
        $article3 = $repositery->findAll();
        $articlesDesc = $repositery->findBy([], ['id' => 'desc']);

// replace this example code with whatever you need
// Ne surtout pas oublier de changer l’adresse
        return $this->render('articles/articles.html.twig', [
// on balance dans la vue notre liste de users
            'liste_article' => $articlesDesc,

        ]);

    }

}