<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
#[AsCommand(
    name: 'create-admin',
    description: 'crea el usuario administrador',
)]
class CreateAdminCommand extends Command
{
    private $passwordEncoder;
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    public function __construct(UserPasswordHasherInterface $passwordEncoder, EntityManagerInterface $manager)
    {
        $this->passwordEncoder =$passwordEncoder;
        $this->manager=$manager;
        parent::__construct();
    }

    protected function configure(): void
    {
        // $this
        //     ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
        //     ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        // ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        // $arg1 = $input->getArgument('arg1');

        $user = new User();
        $user   ->setUsername('admin')
                ->setRoles(array('ROLE_SUPER_ADMIN'));
        $password=md5(date('Y-m-d-H-i-s'));
        $user->setPassword(
            $this->passwordEncoder->hashPassword(
                $user,
                $password
            )
        );

        $this->manager->persist($user);
        $this->manager->flush();

        // if ($arg1) {
        //     $io->note(sprintf('You passed an argument: %s', $arg1));
        // }

        // if ($input->getOption('option1')) {
        //     // ...
        // }

        $io->success("El Usuario: ".$user->getUserIdentifier()." fue creado correctamente!");
        $io->success("La Contraseña es: ".$password);

        return Command::SUCCESS;
    }
}
