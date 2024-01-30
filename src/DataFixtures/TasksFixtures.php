<?php

namespace App\DataFixtures;

use App\Entity\Tasks;
use Doctrine\{
    Bundle\FixturesBundle\Fixture,
    Persistence\ObjectManager
};
use Faker\Factory;

class TasksFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 3; $i++) {
            $task = new Tasks();
            $task->setTitle($faker->text(100))
                ->setContent($faker->text);
            $manager->persist($task);
        };
        $manager->flush();
    }
}