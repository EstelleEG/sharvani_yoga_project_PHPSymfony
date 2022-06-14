<?php

namespace App\Entity;

use DateTime;
use App\Entity\Interfaces\IRole;
use App\Repository\ClassCalendarRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ClassCalendarRepository::class)]
class ClassCalendar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $class_id;

    #[ORM\Column(type: 'datetime')]
    private $date_class;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassId(): ?int
    {
        return $this->class_id;
    }

    public function setClassId(int $class_id): self
    {
        $this->class_id = $class_id;

        return $this;
    }

    public function getDateClass(): ?\DateTimeInterface
    {
        return $this->date_class;
    }

    public function setDateClass(\DateTimeInterface $date_class): self
    {
        $this->date_class = $date_class;

        return $this;
    }
}
