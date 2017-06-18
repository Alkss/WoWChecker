<?php
define('_root', $_SERVER['DOCUMENT_ROOT']);
require_once(_root . '/Model/Guild.php');

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/05/17
 * Time: 17:34
 */
class GuildController
{

    public function checkFields($name, $server)
    {
        if (isset($name) && isset($server)) {
            return true;
        } else {
            return false;
        }


    }


    public function decodeJsonGuild($name, $server)
    {
        $name = str_replace(" ", "%20", $name);
        $json = file_get_contents('https://us.api.battle.net/wow/guild/' . $server . '/' . $name . '?fields=members&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
        return $obj = json_decode($json);

    }

    public function decodeJsonChar($charName, $server)
    {

        $json = json_decode(file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $charName . '?fields=items&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep'));
        return $json;

    }

    public function popMembers($allMembers)
    {
        $members = "";
        for ($i = 0; $i < sizeof($allMembers); $i++) {
            $members .= array_pop($allMembers) . "<br>";
        }
        return $members;
    }

    public function findMembers($name, $server)
    {
        $json = $this->decodeJsonGuild($name, $server);
        $allMembers = array();
        $members_list = $json->members;
        foreach ($members_list as $member) {
            array_push($allMembers, $member->character->name);
        }
        return $allMembers;
    }


    public function guildRank($name, $server)
    {
        $json = json_decode(file_get_contents('https://www.wowprogress.com/guild/us/' . $server . '/' . $name . '/json_rank'));
        return $json;
    }

    public function decodeRoles($name, $server)
    {
        $name = str_replace(" ", "%20", $name);
        $json = json_decode(file_get_contents('https://us.api.battle.net/wow/guild/' . $server . '/' . $name . '?fields=members&locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep'));
        return $json;
    }

    public function populateSpec($charName)
    {
        $output = "";
        $output .= $charName . "<br>";
//        var_dump($output);
        return $output;

    }

    public function findTANKRoles($name, $server)
    {
        $json = $this->decodeRoles($name, $server);
        $members = $json->members;
        $roleMembers ="";
        foreach ($members as $char) {
            $role = $char->character->spec->role;
            $charName = $char->character->name;
            if ($role == "TANK") {
                $roleMembers .= $this->populateSpec($charName);
            }
//            var_dump($char->character->spec->role);
//            var_dump($char->character->name);
        }
        return $roleMembers;
    }


    public function findDPSRoles($name, $server)
    {
        $json = $this->decodeRoles($name, $server);
        $members = $json->members;
        $roleMembers ="";
        foreach ($members as $char) {
            $role = $char->character->spec->role;
            $charName = $char->character->name;
            if ($role == "DPS") {
                $roleMembers .= $this->populateSpec($charName);

//            var_dump($char->character->spec->role);
//            var_dump($char->character->name);
            }
        }
        return $roleMembers;
    }

    public function findHEALINGRoles($name, $server)
    {
        $json = $this->decodeRoles($name, $server);
        $members = $json->members;
        $roleMembers ="";
        foreach ($members as $char) {
            $role = $char->character->spec->role;
            $charName = $char->character->name;
            if ($role == "HEALING") {
                $roleMembers .= $this->populateSpec($charName);
            }
//            var_dump($char->character->spec->role);
//            var_dump($char->character->name);
        }
        return $roleMembers;
    }
}
