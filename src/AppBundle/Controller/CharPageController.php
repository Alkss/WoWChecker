<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/05/17
 * Time: 02:05
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{

    /**
    *@Route("/char-page.php?name={$name}&server={$server}&region={$region}")
     */

    public function showAction($name, $server, $region){

       return $this->render('char-page.php',[
           'name' => $name,
           'server' => $server,
           '$region' => $region,
       ]);

    }
}