<?php

/* char-page.php */
class __TwigTemplate_5c23b4d30a0e4953203449941a7b12cd84d0caba6626176d87fe0919146317c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
\$name = \$_GET[\"name\"];
\$server = \$_GET[\"server\"];
\$region = \$_GET[\"region\"];
?>


<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Character Page</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t<html>
\t<div>
\t\t<table>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<h2><?= \$name; ?></h2>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<?= \$server; ?>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\" align=\"center\">Informações Sobre Raid</div>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t\t<div class=\"panel-body\">Conteúdo...</div><hr>
\t\t</div>
\t</div>
</div>
</div>
</html>";
    }

    public function getTemplateName()
    {
        return "char-page.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "char-page.php", "/home/alex/repository/WowChecker/app/Resources/views/char-page.php");
    }
}
