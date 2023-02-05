<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    
    
    /**
     * @Route("/teacher/{name}", name="show_teacher", methods={"GET"})
     */
    public function showTeacher($name)
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'Bonjour '.$name,
            
        ]);
    }
    public function goToIndex()
    {
        return $this->redirectToRoute('student/index.html.twig');
    }
}
    
