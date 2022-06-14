<?php

namespace App\DataFixtures;

use App\Entity\ClassCalendar; 
use DateTime;
use App\Entity\Interfaces\IRole; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClasscalendarFixture extends Fixture implements IRole
{
    public function load(ObjectManager $manager): void
    {
        $user = new ClassCalendar;
        $user->setClassId("11");
        $user->setDateClass(new DateTime('2000-06-20'));
        //$user->addRole(self::ROLE_ADMIN);
        
        $manager->persist($user);

        $user = new ClassCalendar;
        $user->setClassId("22");
        $user->setDateClass(new DateTime('2022-06-24'));
       
        $manager->persist($user);

        $manager->flush();
    }
}
