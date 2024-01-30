<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Services\TasksServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/tasks', name:'tasks.')]
class TasksController extends AbstractController
{
    /**
     * @todo Retourner toutes les tâches
     * @param EntityManagerInterface $doctrine
     * @return Response
     * @author Remy Young<remy.yang42150@gmail.com>
     */
    #[Route('', name: 'index')]
    public function index(TasksServices $tasksServices): Response
    {
        return $this->render('tasks/index.html.twig', [
            'controller_name' => 'TasksController',
            "tasks" => $tasksServices->all()
        ]);
    }
}