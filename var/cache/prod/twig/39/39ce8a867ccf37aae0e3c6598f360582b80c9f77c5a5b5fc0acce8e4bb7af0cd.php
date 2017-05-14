<?php

/* 1.0/plugins/page_notes/styles/page_notes.css */
class __TwigTemplate_ee339081eab05c32b9c6748bc95ea6fb451e8aae90ff4db3ea6eef3ab43515f5 extends Twig_Template
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
        echo "﻿#pageNotesHost {
    font-size: 12px;
    color:#4a4a4a;
    height: 100%;
}

#pageNotesHostBtn a {
    background: url('images/notes_on.png');
    background: url('images/notes_on.svg'),linear-gradient(transparent, transparent);
}

.hashover #pageNotesHostBtn a:hover {
    background: url('images/notes_hover.png');
    background: url('images/notes_hover.svg'),linear-gradient(transparent, transparent);
}

#pageNotesHostBtn a.selected, #pageNotesHostBtn a.selected:hover {
    background: url('images/notes_off.png');
    background: url('images/notes_off.svg'),linear-gradient(transparent, transparent);
}

#footnotesButton {
    background: url('images/footnotes.png') no-repeat center center;
    background: url('images/footnotes.svg') no-repeat center center,linear-gradient(transparent, transparent);
}

#footnotesButton:hover {
    background: url('images/footnotes_hover.png') no-repeat center center;
    background: url('images/footnotes_hover.svg') no-repeat center center,linear-gradient(transparent, transparent);
}

#footnotesButton.sitemapToolbarButtonSelected, #footnotesButton.sitemapToolbarButtonSelected:hover {
    background: url('images/footnotes_on.png') no-repeat center center;
    background: url('images/footnotes_on.svg') no-repeat center center,linear-gradient(transparent, transparent);
}

.nextPageButton {
    background: url('images/forward.png') no-repeat center center;
    background: url('images/forward.svg') no-repeat center center,linear-gradient(transparent, transparent);    
}

.nextPageButton:hover {
    background: url('images/forward_hover.png') no-repeat center center;
    background: url('images/forward_hover.svg') no-repeat center center,linear-gradient(transparent, transparent);    
}

.prevPageButton {
    background: url('images/back.png') no-repeat center center;
    background: url('images/back.svg') no-repeat center center,linear-gradient(transparent, transparent);    
}

.prevPageButton:hover {
    background: url('images/back_hover.png') no-repeat center center;
    background: url('images/back_hover.svg') no-repeat center center,linear-gradient(transparent, transparent);    
}

#pageNotesScrollContainer 
{
    overflow: auto;
    width: 100%;
    /*height: 100%;*/
    -webkit-overflow-scrolling: touch;
}    

#pageNotesContainer 
{
    /*padding: 10px 10px 10px 12px;*/
}

#pageNotesContent 
{
\toverflow: visible;
}

.pageNoteContainer 
{
    padding: 10px;
}

.pageNoteName 
{
    font-family: 'Trebuchet MS';
\tfont-size: 14px;
    font-weight: bold;
\tmargin-bottom: 5px;
\t/*text-decoration: underline;*/
\twhite-space: nowrap;
}

.pageNote 
{
    line-height: 21px;
\t/*margin-bottom: 20px;*/
}

.widgetNoteContainer {
    padding: 10px;
    border-bottom: 1px solid transparent;
    border-top: 1px solid transparent;
    cursor: pointer;
}

.widgetNoteContainerSelected {
    background-color: white;
    border-bottom: 1px solid #c2c2c2;
    border-top: 1px solid #c2c2c2;
}

/*.widgetNoteContainer:hover {
    background-color: white;
    //border-bottom: 1px solid #c2c2c2;
    //border-top: 1px solid #c2c2c2;
}*/

.widgetNoteFootnote {
    display: inline-block;
    /*vertical-align: top;
    margin: 2px 5px 10px 0px;
    padding: 1px 6px;
    font-size: 10px;
    color: #ffffff;
    background-color: #0a6cd6;*/
    width: 13px;
    height: 12px;
    padding-top: 1px;
    text-align: center;
    background-color: #138CDD;
    /*-moz-box-shadow: 1px 1px 3px #aaa;
    -webkit-box-shadow: 1px 1px 3px #aaa;
    box-shadow: 1px 1px 3px #aaa;*/
    font-size: 0px;
    margin-right: 8px;
}

div.annnoteline {
    display: inline-block;
    width: 9px;
    height: 1px;
    border-bottom: 1px solid white;
    margin-top: 1px;
}

.widgetNoteLabel {
    display: inline-block;
    vertical-align: top;
    font-family: 'Trebuchet MS';
\tfont-size: 14px;
    font-weight: bold;
\tmargin-bottom: 5px;    
}

.noteLink {
    text-decoration: inherit;
    color: inherit;
}

.noteLink:hover {
    background-color: white;
}";
    }

    public function getTemplateName()
    {
        return "1.0/plugins/page_notes/styles/page_notes.css";
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
        return new Twig_Source("", "1.0/plugins/page_notes/styles/page_notes.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/plugins/page_notes/styles/page_notes.css");
    }
}
