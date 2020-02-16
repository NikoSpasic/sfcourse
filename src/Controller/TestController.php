<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     */
    public function custom(Request $request)
    {
        $name = ucfirst(mb_strtolower($request->get('name')));
        return $this->render('test/custom.html.twig', [
           'name' => $name,
        ]);
    }
}
