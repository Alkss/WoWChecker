<?php

/* 1.0/adiciona-produto.php */
class __TwigTemplate_3f8f338e253b9e993b057fc51c151fd3b59aa356f858d7e3042e8bbc323e80a9 extends Twig_Template
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
\$nome = \$_GET[\"nome\"];
\$preco = \$_GET[\"preco\"];
?>
<html>


Produto <?= \$nome; ?>, <?= \$preco; ?> adicionado com sucesso!


</html>";
    }

    public function getTemplateName()
    {
        return "1.0/adiciona-produto.php";
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
        return new Twig_Source("", "1.0/adiciona-produto.php", "/home/alex/repository/WowChecker/app/Resources/views/1.0/adiciona-produto.php");
    }
}
