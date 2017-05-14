<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/05/17
 * Time: 02:05
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{

    /**
    *@Route("/")
     */

    public function showAction(){
     //   @Route::class;
        return new Response('Olá!');

    }
}