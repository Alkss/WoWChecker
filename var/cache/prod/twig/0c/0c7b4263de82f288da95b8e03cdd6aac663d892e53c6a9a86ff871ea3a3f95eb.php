<?php

/* 1.0/novo-formulario.php */
class __TwigTemplate_b5115a5813222cca92118c4a30c1cdbe8e4b2f0285949d39b0462114ccc93ebe extends Twig_Template
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
    <form action=\"adiciona-produto.php\">
        Nome: <input type=\"text\" name=\"nome\" /><br/>
        Preço: <input type=\"number\" name=\"preco\" /><br/>

        <input type=\"submit\" value=\"Cadastrar\" />
    </form>
</html>
";
    }

    public function getTemplateName()
    {
        return "1.0/novo-formulario.php";
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
        return new Twig_Source("", "1.0/novo-formulario.php", "/home/alex/repository/WowChecker/app/Resources/views/1.0/novo-formulario.php");
    }
}
