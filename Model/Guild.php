<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/05/17
 * Time: 17:34
 */
class Guild
{
    private $name;
    private $server;
    private $members;
    private $numberMembers;


    function __construct($name, $server){
        $this->name = $name;
        $this->server = $server;
    }



    //Getters and Setters

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getNumberMembers()
    {
        return $this->numberMembers;
    }

    /**
     * @param mixed $members
     */
    public function setMembers($members)
    {
        $this->members = $members;
    }

    /**
     * @param mixed $numberMembers
     */
    public function setNumberMembers($numberMembers)
    {
        $this->numberMembers = $numberMembers;
    }

    /**
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param mixed $server
     */
    public function setServer($server)
    {
        $this->server = $server;
    }


}