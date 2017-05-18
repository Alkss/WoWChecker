<?php
require_once 'ConnectionDB.php';
$db = new ConnectionDB();
$db->conncetDB();

?>
<html>
<header>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</header>


<h1 align="center">WoWChecker</h1>
<div class="container-fluid">
    <div class="col-xs-4"
    <form action="char-page.php">
        <h4> Buscar por Personagem </h4>

        Nome: <input type="text" name="name"/><br/>
        Server: <input type="text" name="server"/><br/>
        <input type="submit" value="Buscar">

    </form>
</div>
<div class="col-xs-4">
    <form action="guild-page.php">
        <h4> Buscar por Guild </h4>
        Nome: <input type="text" name="name"/><br/>
        Server: <input type="text" name="server"/><br/>
        <input type="submit" value="Buscar">
    </form>
</div>

<div class="col-xs-4">
    <div class="panel panel default">
        <div class="panel-heading">Buscas recentes</div>
        <div class="panel-body">

        </div>
    </div>
</div>


</>

</html>


