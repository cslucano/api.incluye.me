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


        $project = new Project();
        $project->setName('Adaptacion de Llave');
        $project->setShortName('Adaptacion de Llave');
        $project->setDisabilityType('Discapacidad Motora');
        $project->setGender('25');
        $project->setProjectLevel('básico');
        $project->setProjectType('prótesis');

        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Tabla de Resonancia');
        $project->setShortName('Tabla de Resonancia');
        $project->setDisabilityType('Discapacidad Auditiva');
        $project->setGender('30');
        $project->setProjectLevel('complejo');
        $project->setProjectType('prótesis');

        $manager->persist($project);
        $manager->flush();

    }
}