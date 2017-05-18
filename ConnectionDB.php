<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/05/17
 * Time: 21:22
 */
class ConnectionDB
{

    private $user = 'u214291306_alkss';
    private $pass = '8585dc2d';
    private $server = 'mysql.hostinger.com.br';
    private $database = 'u214291306_wowdb';


    public function conncetDB()
    {

        try {
            $dbh = new PDO('mysql:host=mysql.hostinger.com.br;dbname=' . $this->database, $this->user, $this->pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function insertChar($name, $server, $region)
    {
        try {
            $dbh = new PDO('mysql:host=mysql.hostinger.com.br;dbname=' . $this->database, $this->user, $this->pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $json = file_get_contents('https://us.api.battle.net/wow/character/'. $server .'/' . $name . '?locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
            $arr = json_decode($json);


            $statement = $dbh->prepare("INSERT INTO `char`(name, level, nme_class) VALUES(:name, :level, :nme_class)");
            $statement->execute(array(
                ':name' => $arr->name,
                ':level' => $arr->level,
                ':nme_class' => $arr->class
            ));
            echo $statement->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }

    }


    public function returnInfo(){

    }
}

