<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/05/17
 * Time: 21:22
 */
class ConnectionDB
{

    //Definição dos atributos para realizar o login no server MySQL

    private $user = 'u214291306_alkss';
    private $pass = '8585dc2d';
    private $server = 'mysql.hostinger.com.br';
    private $database = 'u214291306_wowdb';


    //Função para realizar a conexão com o banco de dados MySQL
    public function conncetDB()
    {

        //tentativa de realiazar a conexão
        try {
            $dbh = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->database, $this->user, $this->pass); //conexão realizada com PDO, passando como parametros os atributos previamente definidos
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } //caso falhe em realizar a conexão
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    //Realiza a inserção dos valores 'name', 'level' e 'class' na tabela char no db.
    public function insertChar($name, $server)
    {
        try {

            $dbh = $this->conncetDB(); //conectar no db
            $selectStatement = $dbh->prepare("SELECT name FROM `char` ORDER BY idt DESC LIMIT 1 ");
            $selectStatement->execute();
            $selectedName = $selectStatement->fetchAll();
            var_dump($selectedName);
            foreach ($selectedName as $names){

                if ($name == $names['name']) {
                    //do nothing...
                } else {

                    $json = file_get_contents('https://us.api.battle.net/wow/character/' . $server . '/' . $name . '?locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
                    $arr = json_decode($json);

                    $statement = $dbh->prepare("INSERT INTO `char`(name, level, nme_class) VALUES(:name, :level, :nme_class)");

                    //transformar as informações em array para realizar a inclusão utilizando a função execute
                    // *******PREVINE SQL INJECTION********//
                    $statement->execute(array(
                        ':name' => $arr->name,
                        ':level' => $arr->level,
                        ':nme_class' => $arr->class
                    ));
                    //echo $statement->rowCount();
                }
            }

        }catch
            (PDOException $e) {
                echo 'Error: ' . $e->getMessage();

            }

    }

    //Retorna os valores 'name', 'level' e 'class' da tabela char no db para ser apresentado.
    public function returnInfo()
    {

        try {
            $dbh = $this->conncetDB();
            $statement = $dbh->prepare("SELECT * FROM `char` ORDER BY idt DESC LIMIT 7");
            $statement->execute();
            $chars = $statement->fetchAll();
            foreach ($chars as $char) {
                echo $char['name'] . " - Nível: " . $char['level'] . " - " . $char['nme_class'] . '<hr>';
            }


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }


    }
}

