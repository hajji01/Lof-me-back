<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\Utilisateur;

class AddbddCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:add-user')
            ->setDescription('Ajouter un nouveau utilisateur à votre base');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $prenom = $io->ask('Donner votre prénom:');
        $nom = $io->ask('Donner votre nom:');
        $email = $io->ask('Entrer votre email:');
        $password = $io->askHidden('Votre password:');
        $numeroTelephone = $io->ask('Donner votre numéro de téléphone:');
        $raceChien = $io->ask('Donner la race de votre chien:');
        $sexe = $io->ask('Donner le sexe de votre chien (Mâle ou Femelle):');
        $dateNaissance = $io->ask('Entrer votre date de naissance (au format YYYY-MM-DD):');

        $utilisateur = new Utilisateur();
        $utilisateur->setPrenom($prenom);
        $utilisateur->setNom($nom);
        $utilisateur->setEmail($email);
        $utilisateur->setPassword(password_hash($password, PASSWORD_BCRYPT));
        $utilisateur->setNumeroTelephone($numeroTelephone);
        $utilisateur->setRacechien($raceChien);
        $utilisateur->setSexe($sexe);
        $utilisateur->setDateNaissance(new \DateTime($dateNaissance));

        $this->entityManager->persist($utilisateur);
        $this->entityManager->flush();

        $io->success('Utilisateur ajouté avec succès.');

        return Command::SUCCESS;
    }
}
