<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use AppBundle\Form\ProjectType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction(Request $request)
    {
        $projects = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->findAll()
        ;

        $projects = array_map(
            function ($item) {
                /** @var Project $item */

                return [
                    'name' => $item->getName(),
                    'short_name' => $item->getShortName(),
                    'disability_type' => $item->getDisabilityType(),
                    'gender' => $item->getGender(),
                    'project_level' => $item->getProjectLevel(),
                    'project_type' => $item->getProjectType(),
                    'description' => $item->getDescription(),
                ];
            },
            $projects
        );

        return new JsonResponse($projects);
    }

    /**
     * @Route("/project/search", name="project_search")
     */
    public function projectSearchAction(Request $request)
    {
        $form = $this->createForm(new ProjectType(), new Project());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $project = $form->getData();

            var_dump($project); die();
        }

        return $this->render('default/project_search.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
