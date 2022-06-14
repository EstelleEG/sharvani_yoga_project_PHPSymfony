<?php

namespace App\DataFixtures;

use App\Entity\User; 
use DateTime;
use App\Entity\Interfaces\IRole; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture implements IRole
{

    private $userPasswordHasher;

    public function __construct( UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $user = new User;
        $user->setName("Estelle");
        $user->setEmail("admin@admin.com");
        $user->addRole(self::ROLE_ADMIN);
        $user->setCreatedAt(new DateTime('now'));
        $user->setPassword($this->userPasswordHasher->hashPassword(
            $user, 
            "123zzz"
            )
    );
        $manager->persist($user);

        $user = new User;
        $user->setName("Anne");
        $user->setEmail("test2@test.com");
        $user->setCreatedAt(new \DateTime('now'));
        $user->setPassword($this->userPasswordHasher->hashPassword(
             $user, 
             "123def"
             )
    );
        $manager->persist($user);
        $manager->flush();
    }
}
