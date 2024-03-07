<?php

namespace App\DataFixtures;

use App\Entity\Ressource;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RessourceFixtures extends Fixture
{
    // private $userPasswordHasher;
    
    // public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    // {
    //     $this->userPasswordHasher = $userPasswordHasher;
    // }

    public function load(ObjectManager $manager): void
    {
        // Create a ressource
        $ressource = new Ressource();
        $ressource->setName("Bien-Être");
        $ressource->setDescription("apprendre à deconnecter pour mieux se retrouver");
        $manager->persist($ressource);

        $manager->flush();
   }
}