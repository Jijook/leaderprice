<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LeaderController extends Controller
{
    /**
     * @Route("/leader", name="leader")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}
