<?php
require_once('Model/Char.php');
require_once('Control/CharController.php');

$name = $_GET['name'];
$server = $_GET['server'];

if ($name != null && $server != null) {
    $charController = new CharController($name, $server);
    $json = $charController->decodeJsonNameAndServer($name, $server);
    $stats = $charController->decodeJsonStats($name, $server);
    $raid = $charController->decodeJsonRaid($name, $server);


}
if (isset($json->name)) {

    echo
        '
    
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
                <h2>' . $json->name . '(' . $json->level . ')</h2>
            </td>
        </tr>
        <tr>
            <td>
                
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-9">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Informações Sobre Raid</div>
                <div class="panel-body">
                
                    <div class="col-xs-2">
                    '.$charController->decodeJsonRaidGuild($name, $server).'
                    </div>
                    <div class="col-xs-2">
                    
                    </div>
                    
                
                </div>
                <hr>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Estatisticas</div>
                <div class="panel-body">
                <div class="col-xs-9">
                Health<hr>
                Power Type<hr>
                Strength<hr>
                Agility<hr>
                Intelect<hr>
                Stamina<hr>
                Critical Strike<hr>
                Haste<hr>
                Mastery<hr>
                Leech<hr>
                Versatility<hr>
                </div>
                <div class="col-xs-3">
                ' . $stats->health . '<hr>
                ' . $stats->powerType . '<hr>
                ' . $stats->str . '<hr>
                ' . $stats->agi . '<hr>
                ' . $stats->int . '<hr>
                ' . $stats->sta . '<hr>
                ' . $stats->crit . '<hr>
                ' . $stats->haste . '<hr>
                ' . $stats->mastery . '<hr>
                ' . $stats->leech . '<hr>
                ' . $stats->versatility . '<hr>
                </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

    
    ';
} else {
    echo 'Erro 404: Personagem não encontrado. Por favor verifique se todos os campos foram preenchidos corretamente.';

}

?>

