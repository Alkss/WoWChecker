<?php

/* 1.0/resources/reload.html */
class __TwigTemplate_a485c5717a408886b288883aeee047a6f648ea3425d7efaf108c41b75f9eeeda extends Twig_Template
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
\tfunction getUrl() {
      var query = window.location.hash.substring(1);
      var vars = query.split(\"&&&\");
      for (var i=0;i<vars.length;i++) {
        var url = vars[i];
        return decodeURI(url).replace(\"html%23\",\"html#\");
      } 
    }

    var rel = '../';
    var url = getUrl();
    if (url.indexOf(\":\") > 0 && url.indexOf(\":\") < 10) rel = '';
\tself.location.href = rel + url;
\t</script>
\t
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "1.0/resources/reload.html";
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
        return new Twig_Source("", "1.0/resources/reload.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/reload.html");
    }
}
