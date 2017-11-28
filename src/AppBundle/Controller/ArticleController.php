<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
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
        $repository = $entityManager->getRepository('AppBundle:Article');

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $repository->findAll();

        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        // parameters to template
        return $this->render('articles/articles.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/articles/add", name="article_add")
     */
    public
    function addAction(Request $request)
    {
        //creation d'un article et creation du formulaire
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        //test sur le submit et data valid
        if ($form->isSubmitted() && $form->isValid()) {

            $article = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute('articles');
        }

        //return, on donne a la vue correspondante les variable twig
        return $this->render('articles/add.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    //on envoi l'id en GET dans le routage

    /**
     * @Route("/articles/edit/{id}", name="article_edit")
     */
    public function editAction(Request $request, $id)
    {
        //recupération d'un user par sa cle primaire 'id'
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:Article');
        //id article
        $article = $repository->findOneById($id);

        //recupération du form par user
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        //test form valid
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute('articles');
        }
        //return, on donne a la vue correspondante les variable twig
        return $this->render('articles/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    //on envoi l'id en GET dans le routage
    /**
     * @Route("/articles/show/{id}", name="article_show")
     */
    public function showAction(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:Article');

        //on peut aussi recupérer l'id par request, method get et id entre quotes !!
        $article = $repository->findOneById($request->get('id'));

        return $this->render('articles/show.html.twig', [
            'article' => $article
        ]);
    }

    /**
     * @Route("/articles/{id}", name="article_delete")
     */

    public function deleteAction(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:Article');

        $article = $repository->findOneById($id);

        if(is_null($article)){
            throw $this->createNotFoundException('No user found');
        }

        $entityManager->remove($article);
        $entityManager->flush();

        //return, on donne a la vue correspondante les variable twig
        return $this->redirectToRoute('articles');
    }

    /**
     * @Route("/articles/others/{id}", name="article_others")
     */

    //moyen de recupérer une liste définie de user
    public function otherUserWidgetAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:Article');

        $queryBuilder = $repository->createQueryBuilder('u')
            ->where ("u.id!= :id")
            ->setParameters(['id'=>$request->get('id')])
            ->setMaxResults(10);

        $query = $queryBuilder->getQuery();
        $article = $query->getResult();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('articles/others.html.twig',[
            'article'=>$article
        ]);
    }

    /**
     * @Route("/articles/userWidget/{id}", name="article_widget")
     */

    //moyen de recupérer une liste définie de user
    public function userWidgetAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:Article');
        $date = new \DateTime();

        //requetes preparee
        $queryBuilder = $repository->createQueryBuilder('u')

            ->where ("u.date = :date")
            ->setParameters(['date' => $date->format('Y-m-d')])
            ->setMaxResults(10);

        $query = $queryBuilder->getQuery();
        $article = $query->getResult();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('articles/articlesWidget.html.twig',[
            'article'=>$article
        ]);
    }

}