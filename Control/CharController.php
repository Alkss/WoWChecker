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

    public function decodeJsonStats($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=stats&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        return $obj->stats;
    }

    public function decodeJsonRaidGuild($name, $server)
    {
        $json = file_get_contents('https://www.warcraftlogs.com:443/v1/rankings/character/' . $name . '/' . $server . '/us?api_key=bd79d67e43a4f5dfa226ee2193e6fa3f');
        $obj = json_decode($json);
        $output = "";
        for ($i = 0; $i < count($obj); $i++) {
            if ($obj[$i]->guild != null) {
                $output .= $obj[$i]->guild . "</br>";
            } else {
                $output .= "Sem guild" . "<br>";
            }
        }
        return $output;
    }


    //transformar numa função para retornar os bosses da raid de interesse.
    public function decodeJsonRaidBossName($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=progression&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        $arr = array();
        $bossesName = "";
        $boss_list = $obj->progression->raids[37]->bosses;

        foreach ($boss_list as $boss) {
            $bossesName .= $boss->name . "<hr><br>";
        }
        return $bossesName;

    }

    public function decodeJsonRaidBossLFRKills($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=progression&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        $arr = array();
        $lfrBosses = "";
        $boss_list = $obj->progression->raids[37]->bosses;

        foreach ($boss_list as $boss) {
            $lfrBosses .= $boss->lfrKills . "<hr><br>";
        }
        return $lfrBosses;
    }

    public function decodeJsonRaidBossNormalKills($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=progression&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        $arr = array();
        $normalBosses = "";
        $boss_list = $obj->progression->raids[37]->bosses;

        foreach ($boss_list as $boss) {
            $normalBosses .= $boss->normalKills . "<hr><br>";
        }
        return $normalBosses;
    }

    public function decodeJsonRaidBossHeroicKills($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=progression&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        $arr = array();
        $heroicBosses = "";
        $boss_list = $obj->progression->raids[37]->bosses;

        foreach ($boss_list as $boss) {
            $heroicBosses .= $boss->heroicKills . "<hr><br>";
        }
        return $heroicBosses;

    }

    public function decodeJsonRaidBossMythiclKills($name, $server)
    {
        $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?fields=progression&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        $obj = json_decode($json);
        $arr = array();
        $mythicBosses = "";
        $boss_list = $obj->progression->raids[37]->bosses;

        foreach ($boss_list as $boss) {
            $mythicBosses .= $boss->mythicKills . "<hr><br>";
        }
        return $mythicBosses;
    }



}
