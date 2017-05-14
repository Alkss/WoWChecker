<?php
$control = new \AppBundle\Controller\MainController();
?>

<html>
<header>
</header>
<h1>WoWChecker</h1>
    <form action="<?php $control->getCharPage() ?>">
    <h4> Buscar por Personagem </h4>
        Nome: <input type="text" name="name" /><br/>
        Server: <input type="text" name="server" /><br/>
        Região: <input type="text" name="region" /></br>
		<input type="submit" value="Buscar">
    </form>
   	<hr>
    <form action="guild-page.php">
    <h4> Buscar por Guild </h4>
        Nome: <input type="text" name="name" /><br/>
        Server: <input type="text" name="server" /><br/>
        Região: <input type="text" name="region" /></br>
		<input type="submit" value="Buscar">        
   	</form>

</html>
