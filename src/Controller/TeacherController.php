<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher/{name}", name="teacher")
     */
    public function showTeacher($name)
    {

//        return new Response("<h1>Bonjour  $name</h1>");
        return $this->render(
            'teacher/showTeacher.html.twig',
            ['name' => $name]
        );
    }
}
