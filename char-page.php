<?php
require_once 'ConnectionDB.php';
$db = new ConnectionDB();

$name = $_GET["name"];
$server = $_GET["server"];
$db->insertInfo($name);

$json = file_get_contents('https://us.api.battle.net/wow/character/'. $server .'/' . $name . '?locale=en_US&apikey=ndy6c9t2r9qt4mnw248sj9pj83mztrep');
$obj = json_decode($json);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Character Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body
<html>

<div>
    <table>
        <tbody>
        <tr>
            <td>
                <h2><?= $name; ?></h2>
            </td>
        </tr>
        <tr>
            <td>
                <?= $server; ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Informações Sobre Raid</div>
                <div class="panel-body">Conteúdo...</div>
                <hr>
            </div>
        </div>
        <div class="col-xs-6">

            Mais informações

        </div>


    </div>
</div>
</div>
</body>
</html>
