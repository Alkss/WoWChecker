<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/05/17
 * Time: 17:34
 */
class Char
{

    private $name;
    private $level;
    private $server;

    function __construct($name, $server){
        $this->name = $name;
        $this->server = $name;
    }


    // Getters and Setters

    public function getLevel()
    {
        return $this->level;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setServer($server)
    {
        $this->server = $server;
    }
}