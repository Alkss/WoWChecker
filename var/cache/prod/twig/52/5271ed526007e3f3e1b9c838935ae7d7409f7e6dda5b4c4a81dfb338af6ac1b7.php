<?php

/* 1.0/resources/css/reset.css */
class __TwigTemplate_48458eae99a055b0a6c2e80aed05a6285da56760df5328aabc4c44feaea0f427 extends Twig_Template
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
        echo "﻿html,body,div,span,
applet,object,iframe,
h1,h2,h3,h4,h5,h6,p,blockquote,pre,
a,abbr,acronym,address,big,cite,code,
del,dfn,em,font,img,ins,kbd,q,s,samp,
small,strike,strong,sub,sup,tt,var,
dd,dl,dt,li,ol,ul,
fieldset,form,label,legend,
table,caption,tbody,tfoot,thead,tr,th,td {
\tmargin: 0;
\tpadding: 0;
\tborder: 0;
}
table {
\tborder-collapse: collapse;
\tborder-spacing: 0;
}
ol,ul {
\tlist-style: none;
}
q:before,q:after,
blockquote:before,blockquote:after {
\tcontent: \"\";
}";
    }

    public function getTemplateName()
    {
        return "1.0/resources/css/reset.css";
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
        return new Twig_Source("", "1.0/resources/css/reset.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/css/reset.css");
    }
}
