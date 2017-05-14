<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14/05/17
 * Time: 02:05
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{

    /**
    *@Route("/{name}")
     */

    public function showAction($name){

       return $this->render('home-page.php', array(
           'name' => $name,
       ));

    }
    /**
     *@Route("/char-page")
     * @Template()
     */

    public function showCharPage(){

        return $this->render('char-page.php');

    }

    /**
     * @Route("char-page.html.php?name={name}&server={server}&region={region}" , name="char_page")
     * @Template()
     */
    public function getCharPage($name, $server, $region){

            return $this->render('char-page.html.php', array(
                'name' => $name,
                'server' => $server,
                '$region' => $region,
            ));

    }
}