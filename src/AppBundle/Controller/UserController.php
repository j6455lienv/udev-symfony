<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function userAction(Request $request)
    {
        //creation d'un manager
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        //declaration de $users, on recupere toutes les entrees de la table user
        $users = $repository->findAll();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/users.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/users/add", name="add")
     */
    public function addAction(Request $request)
    {
        //creation d'un user et creation du formulaire
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);

        //test sur le submit et data valid
        if($form->isSubmitted() && $form->isValid()){

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
            'user' =>$user,
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

        if(is_null($user)){
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
            ->where ("u.id!= :id")
            ->setParameters(['id'=>$request->get('id')])
            ->setMaxResults(10);

        $query = $queryBuilder->getQuery();
        $users = $query->getResult();

        //return, on donne a la vue correspondante les variable twig
        return $this->render('users/others.html.twig',[
            'users'=>$users
        ]);
    }
}