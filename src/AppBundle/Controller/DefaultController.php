<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /*
     *
     *
     */
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
}