<?php

/* 1.0/resources/Other.html */
class __TwigTemplate_d9e520b7655f4e710c778a0674940ee1b7ebac565b020f565b43f89b59bbfaaf extends Twig_Template
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
\t<head>
\t\t<title></title>
\t</head>
\t<body>
\t<br />
\t<div style=\"width:100%; text-align:center; font-family:Arial; font-size:12px;\" id=other></div>
\t<br />
\t<div style=\"width:100%; text-align:center; font-family:Arial; font-size:12px;\">
\t    <button onclick=\"parent.window.close();\">
\t\t    Close
\t    </button>
\t</div>
\t
\t<SCRIPT src=\"axurerp_pagescript.js\"></SCRIPT>
\t
\t<script language=javascript>
\tfunction getQueryVariable(variable) {
      var query = window.location.hash.substring(1);
      var vars = query.split(\"&&&\");
      for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split(\"=\");
        if (pair[0] == variable) {
          return decodeURI(pair[1]);
        }
      } 
    }

\tvar other = document.getElementById('other');
\tother.innerHTML = getQueryVariable('other');

\t</script>
\t
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "1.0/resources/Other.html";
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
        return new Twig_Source("", "1.0/resources/Other.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/Other.html");
    }
}
