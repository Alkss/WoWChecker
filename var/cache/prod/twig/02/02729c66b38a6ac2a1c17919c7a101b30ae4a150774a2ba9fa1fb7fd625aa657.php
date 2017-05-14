<?php

/* 1.0/plugins/debug/styles/debug.css */
class __TwigTemplate_6629343959543cb8c3225ec27ce4c33d1905379e8d94360feecab44c76141069 extends Twig_Template
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
        echo "﻿#debugHost {
    font-size: 12px;
    color:#4a4a4a;
    height: 100%;
}

#debugHostBtn a {
    background: url('images/variables_on.png');
    background: url('images/variables_on.svg'),linear-gradient(transparent, transparent);
}

.hashover #debugHostBtn a:hover {
    background: url('images/variables_hover.png');
    background: url('images/variables_hover.svg'),linear-gradient(transparent, transparent);
}

#debugHostBtn a.selected, #debugHostBtn a.selected:hover {
    background: url('images/variables_off.png');
    background: url('images/variables_off.svg'),linear-gradient(transparent, transparent);
}

#debugHeader .pageNameHeader {
    padding-right: 0px;
}

#variablesClearLink {
    display: inline-block;
    margin-bottom: 15px;
}

#variablesClearLink:hover {
    color: #0a6cd6;
}

#traceClearLink {
    display: inline-block;
    margin-bottom: 15px;
}

#traceClearLink:hover {
    color: #0a6cd6;
}

#debugScrollContainer 
{
    overflow: auto;
    width: 100%;
    height: 100%;
    -webkit-overflow-scrolling: touch;
}

#debugContainer {
        padding: 10px 10px 10px 10px;
}

.variableName
{
\tfont-weight: bold;
}

.variableDiv
{
    margin-bottom: 20px;
    line-height: 16px;

}

#variablesContainer {
    padding-bottom: 5px;
    /*overflow: auto;*/
}

#traceContainer {
    padding-top: 15px;
    /*padding: 0px 10px 10px 10px;*/
}

.debugToolbarButton 
{
\tfont-size: 1em;
\tcolor: #069;
}

.axEventBlock {
    display: inline-block;
    width: 100%;
    margin: 5px 0px 5px 0px;
    line-height: 21px;
}

/*a.axEventBlock:hover {
    background-color: #069;
    color: white;
}*/

.axTime {
    margin: 0px 0px 0px 0px;
    font-size: 11px;
    color: #b1b3b5;
}

.axLabel {
    margin: 0px 0px 5px 0px;
    font-family: 'Trebuchet MS';
    font-size: 14px;
    font-weight: bold;
}

.lastAxEvent {
    margin-bottom: 10px;
    border-bottom: 1px solid #c2c2c2;
    padding-bottom: 10px;
}

.axEvent {
    margin: 0px 0px 5px 0px;
    font-weight: bold;
}

.axCase {
    margin: 0px 0px 5px 8px;
    font-style: italic;
}

.axAction {
    margin: 0px 0px 5px 13px;
}

#traceEmptyState.emptyStateContainer {
    margin-top: 0px;
}

.debugLinksContainer {
    text-align: right;
}";
    }

    public function getTemplateName()
    {
        return "1.0/plugins/debug/styles/debug.css";
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
        return new Twig_Source("", "1.0/plugins/debug/styles/debug.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/plugins/debug/styles/debug.css");
    }
}
