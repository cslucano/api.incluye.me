<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Ponte Linda');
        $project->setShortName('Ponte Linda');
        $project->setDisabilityType('Discapacidad Motora');
        $project->setGender('15');
        $project->setProjectLevel('básico');
        $project->setProjectType('imagen personal');


        $manager->persist($project);
        $manager->flush();
    }
}