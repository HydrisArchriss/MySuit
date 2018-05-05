<?php

declare(strict_types=1);

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends Controller
{

    /**
     * @Route("/")
     */
    public function index(){

        return $this->render('base.html.twig');
    }
}