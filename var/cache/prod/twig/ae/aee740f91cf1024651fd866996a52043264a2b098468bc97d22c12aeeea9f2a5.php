<?php

/* home-page.php */
class __TwigTemplate_4486f0059d16dc60155d7c6f3d68e9c2817b1affa5e84bfc83625936eaa8b8c1 extends Twig_Template
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
        echo "<html>
<header>
</header>
<h1>WoWChecker</h1>
    <form action=\"char-page.php\">
    <h4> Buscar por Personagem </h4>
        Nome: <input type=\"text\" name=\"name\" /><br/>
        Server: <input type=\"text\" name=\"server\" /><br/>
        Região: <input type=\"text\" name=\"region\" /></br>
\t\t<input type=\"submit\" value=\"Buscar\">        
   \t</form>
   \t<hr>
    <form action=\"guild-page.php\">
    <h4> Buscar por Guild </h4>
        Nome: <input type=\"text\" name=\"name\" /><br/>
        Server: <input type=\"text\" name=\"server\" /><br/>
        Região: <input type=\"text\" name=\"region\" /></br>
\t\t<input type=\"submit\" value=\"Buscar\">        
   \t</form>

</html>
";
    }

    public function getTemplateName()
    {
        return "home-page.php";
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
        return new Twig_Source("", "home-page.php", "/home/alex/repository/WowChecker/app/Resources/views/home-page.php");
    }
}
