<?php

/* 1.0/start_g_0.html */
class __TwigTemplate_5fd9efb938d4458f742d2628743b6577f28af1dcc08276c4585522c4f22af6ce extends Twig_Template
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
<head>
    <title></title>
</head>
<body>

    <script language=\"javascript\">
        self.location.href = \"start.html#g=0\";
    </script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "1.0/start_g_0.html";
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
        return new Twig_Source("", "1.0/start_g_0.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/start_g_0.html");
    }
}
