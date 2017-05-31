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
    private $members;
    private $numberMembers;








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

}