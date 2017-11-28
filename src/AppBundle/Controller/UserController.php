<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Faker\Provider\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function listAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $repository->findAll();

        $paginator = $this->get('knp_paginator');
        $users = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        // parameters to template
        return $this->render('users/users.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/users/add", name="add")
     */
    public function addAction(Request $request)
    {
        //creation d'un user et creation du formulaire
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        //test sur le submit et data valid
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('users');
        }

        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/add.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    //on envoi l'id en GET dans le routage

    /**
     * @Route("/users/edit/{id}", name="edit")
     */

    public function editAction(Request $request, $id)
    {
        //recupération d'un user par sa cle primaire 'id'
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');
        //id user
        $user = $repository->findOneById($id);

        //recupération du form par user
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        //test form valid
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('users');
        }
        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    //on envoi l'id en GET dans le routage

    /**
     * @Route("/users/show/{id}", name="show")
     */
    public function showAction(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        //on peut aussi recupérer l'id par request, method get et id entre quotes !!
        $user = $repository->findOneById($request->get('id'));

        return $this->render('users/show.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/users/{id}", name="delete")
     */

    public function deleteAction(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        $user = $repository->findOneById($id);

        if (is_null($user)) {
            throw $this->createNotFoundException('No user found');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        //return, on donne a la vue correspondante les variable twig
        return $this->redirectToRoute('users');
    }

    /**
     * @Route("/users/others/{id}", name="user_others")
     */

    //moyen de recupérer une liste définie de user
    public function otherUserWidgetAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        $queryBuilder = $repository->createQueryBuilder('u')
            ->where("u.id!= :id")
            ->setParameters(['id' => $request->get('id')])
            ->setMaxResults(10);

        $query = $queryBuilder->getQuery();
        $user = $query->getResult();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/others.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/users/userWidget/{id}", name="user_widget")
     */

    //moyen de recupérer une liste définie de user
    public function userWidgetAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');
        $date = new \DateTime();

        //requetes preparee
        $queryBuilder = $repository->createQueryBuilder('u')
            ->where("u.date = :date")
            ->setParameters(['date' => $date->format('Y-m-d')])
            ->setMaxResults(10);

        $query = $queryBuilder->getQuery();
        $users = $query->getResult();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/userWidget.html.twig', [
            'user' => $users
        ]);
    }

    /**
     * @Route("/rss/file", name="flux_rss")
     */
    //moyen de recupérer une liste définie de user
    public function fluxRSSAction(Request $request)
    {
        // create a simple FeedIo instance
        $feedIo = \FeedIo\Factory::create()->getFeedIo();
        $url = 'https://forgetformation-recrute.talent-soft.com/handlers/offerRss.ashx?LCID=1036&Rss_Contract=2937';
        // read a feed
        $result = $feedIo->read($url);

        // or read a feed since a certain date
        $result = $feedIo->readSince($url, new \DateTime('-7 days'));

        // get title
        $feedTitle = $result->getFeed()->getTitle();

        // iterate through items
        foreach ($result->getFeed() as $item) {
            echo $item->getTitle();
        }
        //return, on donne a la vue correspondante les variable twig
        return $this->render('rss/file.html.twig', [
            'result' => $result
        ]);
    }
}