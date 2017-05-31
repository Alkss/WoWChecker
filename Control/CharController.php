<?php
require_once('ConnectionDB.php');
define('_root', $_SERVER['DOCUMENT_ROOT']);

require_once(_root . '/Model/Char.php');

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/05/17
 * Time: 17:34
 */
class CharController
{

    function __construct($name, $server)
    {

        $newChar = new Char($name, $server);
        $db = new ConnectionDB();
        $db->insertChar($name, $server);
        $this->insertCharModel($name, $server, $newChar);


//        echo '<script>window.location="../char-page.php"</script>';

    }


    public function insertCharModel($name, $server, Char $char)
    {
        $char->setName($name);
        $char->setServer($server);
    }


    public function checkFields($name, $server)
    {
        if (isset($name) && isset($server)) {
            return true;
        } else {
            return false;
        }


    }

    public function decodeJsonNameAndServer($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' .
            $server . '/' . $name .
            '?locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        return $obj = json_decode($json);
    }



}
