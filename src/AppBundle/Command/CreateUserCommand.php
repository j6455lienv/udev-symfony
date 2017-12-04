<?php

namespace AppBundle\Command;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('udev:create-users')
            ->setDescription('Creates next Users.')
            ->addArgument('user-nb', InputArgument::OPTIONAL, 'user number',10)
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $faker = \Faker\Factory::create();
        $nbuser=$input->getArgument('user-nb');

        for ($i = 1; $i <= $nbuser; $i++) {
            $username = $faker->lastName;
            //$date = $faker->Datetime;
            $email = $faker->email;
            $login = $faker->userName;
            $pass = $faker->password;

            $user = new User();
            $user->setUsername($username);
            $user->setDate(new \DateTime());
            $user->setEmail($email);
            $user->setLogin($login);
            $user->setPassword($pass);
            $entityManager->persist($user);
        }

         $output->writeln('Ajout d\'un objet');

        //dump($user);
        $entityManager->flush();


    }
}



