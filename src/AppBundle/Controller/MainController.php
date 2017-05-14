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
    *@Route("/")
     */

    public function showAction($name){

       return $this->render('home-page.php', array(
           'name' => $name,
       ));

    }
    /**
     *@Route("/char-page/{name}")
     * @Template()
     */

    public function showCharPage($name){

        return $this->render('char-page.php', array(
            'name' => $name,
        ));

    }

    /**
     * @Route("char-page.php?name={name}&server={server}&region={region}" , name="char_page")
     * @Template()
     */
    public function getCharPage($name, $server, $region){

            return $this->render('char-page.php', array(
                'name' => $name,
                'server' => $server,
                '$region' => $region,
            ));

    }
}