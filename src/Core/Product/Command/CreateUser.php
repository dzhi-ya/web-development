<?php

declare(strict_types=1);

namespace App\Core\Product\Command;

use App\Core\Product\Document\User;
use App\Core\Product\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUser extends Command
{
    protected static $defaultName = 'app:core:create-user-product';

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates a new user.')
            ->setHelp('This command allows you to create a user...')
            ->addOption('name', null, InputOption::VALUE_OPTIONAL, 'Name')
            ->addOption('first_name', null, InputOption::VALUE_OPTIONAL, 'First name')
            ->addOption('last_name', null, InputOption::VALUE_OPTIONAL, 'Last name')
            ->addOption('email', null, InputOption::VALUE_OPTIONAL, 'Email')
            ->addOption('birthdate', null, InputOption::VALUE_OPTIONAL, 'Birthdate')
            ->addOption('rating', null, InputOption::VALUE_OPTIONAL, 'Rating')
            ->addOption('age', null, InputOption::VALUE_OPTIONAL, 'Age')
            ->addOption('city_id', null, InputOption::VALUE_OPTIONAL, 'City ID')
            ->addOption('reg_date', null, InputOption::VALUE_OPTIONAL, 'Reg Date')
            ->addOption('phone', null, InputOption::VALUE_OPTIONAL, 'Phone')
            ->addOption('roles', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Roles');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($user = $this->userRepository->findOneBy(['name' => $input->getOption('name')])) {
            $output->writeln(
                [
                    'User already exists!',
                    '============',
                    $this->formatUserLine($user),
                ]
            );

            return Command::SUCCESS;
        }

        $user = new User(
            $input->getOption('name'),
            $input->getOption('first_name'),
            $input->getOption('last_name'),
            $input->getOption('email'),
            $input->getOption('birthdate'),
            $input->getOption('rating'),
            $input->getOption('age'),
            $input->getOption('city_id'),
            $input->getOption('reg_date'),
            $input->getOption('phone'),
            $input->getOption('roles')
        );
        $user->setName($input->getOption('name'));
        $user->setFirstName($input->getOption('first_name'));
        $user->setLastName($input->getOption('last_name'));
        $user->setEmail($input->getOption('email'));
        $user->setBirthdate($input->getOption('birthdate'));
        $user->setRating($input->getOption('rating'));
        $user->setAge($input->getOption('age'));
        $user->setCityId($input->getOption('city_id'));
        $user->setRegDate($input->getOption('reg_date'));
        $user->setPhone($input->getOption('phone'));
        $user->setRoles($input->getOption('roles'));


        $this->userRepository->save($user);

        $output->writeln(
            [
                'User is created!',
                '============',
                $this->formatUserLine($user),
            ]
        );

        return Command::SUCCESS;
    }

    private function formatUserLine(User $user): string
    {
        return sprintf(
            'id: %s, name: %s, first_name: %s, last_name: %s, email: %s, birthdate: %s, rating: %s, age: %s, city_id: %s, reg_date: %s, phone: %s, roles: %s',
            $user->getId(),
            $user->getName(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getEmail(),
            $user->getBirthdate(),
            $user->getRating(),
            $user->getAge(),
            $user->getCityId(),
            $user->getRegDate(),
            $user->getPhone(),
            implode(',', $user->getRoles()),
        );
    }
}
