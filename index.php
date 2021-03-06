<?php
require_once('Control/ConnectionDB.php');
$db = new ConnectionDB();


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
<body>

<h1 align="center">WoWChecker</h1>
<div class="container-fluid">

    <!-- box de busca pelo char -->
    <div class="col-xs-4">
        <form action="char-page.php">
            <h4> Buscar por Personagem </h4>
            Nome: <br/><input type="text" name="name"/><br/>
            Server: <br/><input type="text" name="server"/><br/>
            <input type="submit" value="Buscar">
        </form>
    </div>

    <!-- box de buscar recentes -->
    <div class="col-xs-4">
        <div class="panel panel default">
            <div class="panel-heading"><h4>Buscas recentes</h4></div>
            <div class="panel-body"><?php $db->returnInfo() ?></div>


        </div>
    </div>

    <!-- Box de busca pela guild -->
    <div class="col-xs-4">
        <form action="guild-page.php" style="align-self: center">
            <h4> Guild Auction </h4>
            Nome: </br><input type="text" name="name"/><br/>
            Server: </br><input type="text" name="server"/><br/>
            <input type="submit" value="Buscar">
        </form>
    </div>

</div>
</body>

</html>


