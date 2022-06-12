<?php

namespace App\Entity\Interfaces;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

interface IRole
{
    const 
        ROLE_ADMIN = "ROLE_ADMIN",
        ROLE_MEMBER = "ROLE_MEMBER";
}