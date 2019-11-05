<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/", name="projects")
     */
    public function index()
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    public function projects ()
    {
             
        $Projects = [Project1,Project2, Project3] ;
         
        return $this->render('projects/index.html.twig', [ 
                           'projects' => $Projects,
        ]);
    }  
}