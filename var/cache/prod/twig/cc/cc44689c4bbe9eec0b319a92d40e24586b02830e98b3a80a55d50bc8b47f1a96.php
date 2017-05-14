<?php

/* 1.0/resources/images/divider.svg */
class __TwigTemplate_2ce7f11547e04c1182b9405fd3580c6e6e905142a5a269ddf2c57b95fda10dd3 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
<svg width=\"58\" height=\"2\" viewBox=\"0 0 58 2\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">
 <defs>
  <path id=\"path-1\" d=\"M245.5,521 L305.5,521\" stroke-linejoin=\"round\" stroke=\"#bababa\" stroke-dasharray=\"1 8\" stroke-width=\"2\" stroke-linecap=\"round\"/>
 </defs>
 <g id=\"Axshare---Web-View\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">
  <g id=\"Share-Page-Notes-Copy\" sketch:type=\"MSArtboardGroup\" transform=\"translate(-244.000000, -520.000000)\">
   <g id=\"divider\">
    <use xlink:href=\"#path-1\"/>
   </g>
  </g>
 </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "1.0/resources/images/divider.svg";
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
        return new Twig_Source("", "1.0/resources/images/divider.svg", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/images/divider.svg");
    }
}
