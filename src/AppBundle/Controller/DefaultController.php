<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
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
        $user2 = $repository->findOneBy(['id' => 1]);
        $users = $repository->findAll();
        $usersDesc = $repository->findBy([], ['id' => 'desc']);

        //replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'tableau' => [1, 2, 3, 4],
            'translation' => $output,
            'user1' => $user1,
            'user2' => $user2,
            'users' => $users,
            'usersDesc' => $usersDesc
        ]);
    }

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
        $user2 = $repository->findOneBy(['id' => 1]);
        $users = $repository->findAll();
        $usersDesc = $repository->findBy([], ['id' => 'desc']);

        //replace this example code with whatever you need
        return $this->render('default/users.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'tableau' => [1, 2, 3, 4],
            'translation' => $output,
            'user1' => $user1,
            'users' => $users,
            'usersDesc' => $usersDesc
        ]);
    }

    /**
     * @Route("/useradd", name="usersadd")
     */
    public function userAdd(Request $request)
    {

        $form = $this->createForm('AppBundle\Form\UserType');

        //replace this example code with whatever you need
        return $this->render('default/useradd.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'form' => $form->createView(),

        ]);
    }

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
        return $this->render('default/articles.html.twig', [
            // on balance dans la vue notre liste de users
            'liste_article' => $articlesDesc,

        ]);


    }

}