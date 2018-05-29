<?php

/**
 * Created by PhpStorm.
 * User: vvilo
 * Date: 28/05/2018
 * Time: 15:59
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PrimerController
{
    /**
     * @Route("/")
     */
    public function inicio() {
        return new Response('Mi primera pagina en Symfony!');
    }
}