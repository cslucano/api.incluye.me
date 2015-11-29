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
        $project->setDisabilityType(['Discapacidad Motora', 'Discapacidad Intelectual']);
        $project->setGender('15');
        $project->setProjectLevel('básico');
        $project->setProjectType('imagen personal');
        $project->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
        $project->setImage('img/gallery/proyecto1.jpg');

        $manager->persist($project);
        $manager->flush();


        $project = new Project();
        $project->setName('Adaptacion de Llave');
        $project->setShortName('Adaptacion de Llave');
        $project->setDisabilityType(['Discapacidad Motora']);
        $project->setGender('25');
        $project->setProjectLevel('básico');
        $project->setProjectType('prótesis');
        $project->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
        $project->setImage('img/gallery/proyecto2.jpg');

        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Tabla de Resonancia');
        $project->setShortName('Tabla de Resonancia');
        $project->setDisabilityType(['Discapacidad Auditiva', 'Transtorno del Especto Autista', 'Sordoceguera']);
        $project->setGender('30');
        $project->setProjectLevel('complejo');
        $project->setProjectType('prótesis');
        $project->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
        $project->setImage('img/gallery/proyecto3.jpg');

        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Adaptacion de un andador comercial infantil');
        $project->setShortName('Andador comercial infantil');
        $project->setDisabilityType(['Discapacidad Motora']);
        $project->setGender('5');
        $project->setProjectLevel('moderado');
        $project->setProjectType('prótesis');
        $project->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
        $project->setImage('img/gallery/proyecto4.jpg');

        $manager->persist($project);
        $manager->flush();
    }
}