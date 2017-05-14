<?php

/* 1.0/start_c_1.html */
class __TwigTemplate_669b944107a3b3a1dbf6327f18b2eb1619aced8b00c798c5ac4bc82f568c823f extends Twig_Template
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
        echo "﻿<html>
\t<head>
\t\t<title></title>
\t</head>
\t<body>
\t
\t<script language=\"javascript\">
\t\tself.location.href = \"start.html#c=1\";
\t</script>
\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "1.0/start_c_1.html";
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
        return new Twig_Source("", "1.0/start_c_1.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/start_c_1.html");
    }
}
