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
     * @Route("/users", name="userslist")
     */
    public function userAction(Request $request)
    {

        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $monolog = $this->get('logger');
        $monolog->addNotice('Ceci est un message de log', ['tableau' => $array]);
        $monolog->addCritical('Ceci est un message de critical de log', ['tableau' => $array]);


        //on recupere l'objet
        $translator = $this->get('translator');

        $output = [
            "message1" => $translator->trans('i18nNotice'),
            "message2" => $translator->trans('secondMessage')
        ];
        //dump($output);
        //die();

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        $user1 = $repository->find(1);

        $users = $repository->findAll();
        $usersDesc = $repository->findBy([], ['id' => 'desc']);

        //replace this example code with whatever you need
        return $this->render('users/users.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'tableau' => [1, 2, 3, 4],
            'translation' => $output,
            'user1' => $user1,
            'users' => $users,
            'usersDesc' => $usersDesc
        ]);
    }

    /**
     * @Route("/users/add", name="useradd")
     */
    public function userAdd(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //dump($request->get('appbundle_user'));
            //die();

            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('userslist');
        }

        //replace this example code with whatever you need
        return $this->render('users/add.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/users/edit/{id}", name="edit")
     */

    public function edit(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');
        $user = $repository->findOneById($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('userslist');
        }
        return $this->render('users/edit.html.twig', [
            'user' =>$user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/users/show/{id}", name="usershow")
     */
    public function userShow(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');
        $user = $repository->findOneById($request->get('id'));

        return $this->render('users/show.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'user' => $user
        ]);
    }

    /**
     * @Route("/users/{id}", name="userdelete")
     */
    public function userDelete(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository('AppBundle:User');

        $user = $repository->findOneById($id);

        if(is_null($user)){
            throw $this->createNotFoundException('No user found');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        //replace this example code with whatever you need
        return $this->redirectToRoute('userslist');
    }

    /**
     * @Route("/users/others/{id}", name="user_others")
     */
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

        //replace this example code with whatever you need
        return $this->render('users/others.html.twig',[
            'users'=>$users
        ]);
    }




}