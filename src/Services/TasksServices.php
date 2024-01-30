<?php

namespace App\Services;

use App\Entity\Tasks;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TasksServices
{
    private EntityManagerInterface $manager;
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function all(): array
    {
        return $this->manager->getRepository(Tasks::class)->findAll();
    }

    public function remove(int $id, RedirectResponse $redirect): RedirectResponse
    {
        $this->manager->remove($this->manager->getRepository(Tasks::class)->find($id));
        $this->manager->flush();
        // test 23
        return $redirect;
    }
}