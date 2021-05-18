<?php

namespace App\Controller\Intervention;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/intervention/add", name="intervention_add")
     */
    public function index()
    {
        return $this->render('intervention/add/index.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }
}
