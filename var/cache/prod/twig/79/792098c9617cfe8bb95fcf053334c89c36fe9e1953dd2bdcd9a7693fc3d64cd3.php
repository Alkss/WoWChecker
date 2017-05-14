<?php

/* 1.0/plugins/recordplay/styles/recordplay.css */
class __TwigTemplate_55a39d5ddfa78723d76e6a25570864aa4a8957c561d206455691b7a724d16412 extends Twig_Template
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
        echo "﻿#recordPlayHost {
    font-size: 12px;
    color:#333;
    height: 100%;
}


#recordPlayContainer 
{
    overflow: auto;
    width: 100%;
    height: 100%;
    padding: 10px 10px 10px 10px;
}

#recordPlayToolbar 
{
\tmargin: 5px 5px 5px 5px;
    height: 22px;
}

#recordPlayToolbar .recordPlayButton
{
    float: left;
    width: 22px;
    height: 22px;
    border: 1px solid transparent;
}

#recordPlayToolbar .recordPlayButton:hover
{
    border: 1px solid rgb(0,157,217);
    background-color : rgb(166,221,242);
}

#recordPlayToolbar .recordPlayButton:active
{
    border: 1px solid rgb(0,157,217);
    background-color : rgb(204,235,248);
}

#recordPlayToolbar .recordPlayButtonSelected {
    border: 1px solid rgb(0,157,217);
    background-color : rgb(204,235,248);    
}

#recordButton {
    background: url('../../sitemap/styles/images/233_hyperlink_16.png') no-repeat center center;
}

#playButton {
    background: url('../../sitemap/styles/images/225_responsive_16.png') no-repeat center center;
}

#stopButton {
    background: url('../../sitemap/styles/images/228_togglenotes_16.png') no-repeat center center;
}

#deleteButton {
    background: url('../../sitemap/styles/images/231_event_16.png') no-repeat center center;
}

#recordNameHeader
{
    /* yeah??*/
\tfont-size: 13px;
\tfont-weight: bold;
\theight: 23px;
\twhite-space: nowrap;
}

#recordPlayContent 
{
    /* yeah??*/
\toverflow: visible;
}

.recordPlayName 
{
\tfont-size: 12px;
\tmargin-bottom: 5px;
\ttext-decoration: underline;
\twhite-space: nowrap;
}

.recordPlay 
{
\tmargin-bottom: 10px;
}";
    }

    public function getTemplateName()
    {
        return "1.0/plugins/recordplay/styles/recordplay.css";
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
        return new Twig_Source("", "1.0/plugins/recordplay/styles/recordplay.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/plugins/recordplay/styles/recordplay.css");
    }
}
