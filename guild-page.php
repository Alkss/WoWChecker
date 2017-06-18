<?php

require_once('Model/Guild.php');
require_once('Control/GuildController.php');

$name = $_GET["name"];
$server = $_GET["server"];

if ($name != null && $server != null) {
    $guildController = new GuildController($name, $server);
    $json = $guildController->decodeJsonGuild($name, $server);
    $rankings = $guildController->guildRank($name, $server);
    $members = $guildController->findMembers($name, $server);
}

if (isset($json->name)){
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guild Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<html>
	<div>
		<table>
			<tbody>
				<tr>
					<td>
						<h2>'.$name.' ('.$server.')</h2>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Informações Sobre Raid</div>
			<div class="col-xs-10" style="overflow: scroll; height: 45em">
			<div class="panel-body">
			<div class="col-xs-4">
			<h1>World Rank:   '.$rankings->world_rank.'</h1>
			</div>
			<div class="col-xs-4">
			<h1>Area Rank:   '.$rankings->area_rank.'</h1>
			</div>
			<div class="col-xs-4">
			<h1>Realm Rank:   '.$rankings->realm_rank.'</h1>
			</div>
			
			<h3 align="center">Composição:</h3>
			
			
			<div class="col-xs-4"><h4>Tanks:</h4>
			'.$guildController->findTANKRoles($name, $server).'
			</div>
			<div class="col-xs-4"><h4>Healers:</h4>
			'.$guildController->findHEALINGRoles($name, $server).'
			</div>
			<div class="col-xs-4"><h4>DPS:</h4>
			'.$guildController->findDPSRoles($name, $server).'
			</div>
			
			</div>
			</div>
			
			
			<div class="col-xs-2" style="overflow: scroll; height: 45em">
			<div class="panel-heading" align="center"><h3>Membros</h3></div>
			<div class="panel-body">
			'.$guildController->popMembers($members).'
            
			</div>
			</div>
			</div>
			
			
		</div>
	</div>
</div>
</div>
</html>';

}

else{echo "Erro 404: Guild não encontrada. Por favor verifique se todos os campos foram preenchidos corretamente.";}


?>

