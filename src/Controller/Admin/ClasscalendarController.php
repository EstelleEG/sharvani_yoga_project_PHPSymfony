<?php

namespace App\Controller;

use App\Entity\ClassCalendar;
use App\Form\ClassCalendarType;
use App\Repository\ClassCalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/classcalendar')]

class ClasscalendarController extends AbstractController
{
    #[Route('/classcalendar', name: 'app_classcalendar')]
    public function index(): Response
    {
        return $this->render('admin/classcalendar/index.html.twig', [
            'controller_name' => 'ClasscalendarController',
        ]);
    }
}
