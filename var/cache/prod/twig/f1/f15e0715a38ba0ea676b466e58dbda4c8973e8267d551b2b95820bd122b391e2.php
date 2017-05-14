<?php

/* 1.0/index.html */
class __TwigTemplate_8054e0ce631e99e85ee4960ad9eccce48e35e8daec5309ede6598d0913420ff9 extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html>
  <head>
    <title>index</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <link href=\"resources/css/jquery-ui-themes.css\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"resources/css/axure_rp_page.css\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"data/styles.css\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"files/index/styles.css\" type=\"text/css\" rel=\"stylesheet\"/>
    <script src=\"resources/scripts/jquery-1.7.1.min.js\"></script>
    <script src=\"resources/scripts/jquery-ui-1.8.10.custom.min.js\"></script>
    <script src=\"resources/scripts/prototypePre.js\"></script>
    <script src=\"data/document.js\"></script>
    <script src=\"resources/scripts/prototypePost.js\"></script>
    <script src=\"files/index/data.js\"></script>
    <script type=\"text/javascript\">
      \$axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      \$axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      \$axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id=\"base\" class=\"\">

      <!-- Unnamed (Rectangle) -->
      <div id=\"u0\" class=\"ax_default label\">
        <div id=\"u0_div\" class=\"\"></div>
        <!-- Unnamed () -->
        <div id=\"u1\" class=\"text\">
          <p><span>Carregando...</span></p>
        </div>
      </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "1.0/index.html";
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
        return new Twig_Source("", "1.0/index.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/index.html");
    }
}
