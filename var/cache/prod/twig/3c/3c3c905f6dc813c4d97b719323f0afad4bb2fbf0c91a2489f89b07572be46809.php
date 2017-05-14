<?php

/* 1.0/plugins/sitemap/styles/sitemap.css */
class __TwigTemplate_a571ea2d3ed081f87f6f672e63af15c1a816d5ff7f408e1802fd070fcd10f3c8 extends Twig_Template
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
        echo "﻿
#sitemapHost {
    font-size: 12px;
    color:#4a4a4a;
    height: 100%;
}

#sitemapHostBtn a {
    background: url('images/sitemap_on.png');
    background: url('images/sitemap_on.svg'),linear-gradient(transparent, transparent);
}

.hashover #sitemapHostBtn a:hover {
    background: url('images/sitemap_hover.png');
    background: url('images/sitemap_hover.svg'),linear-gradient(transparent, transparent);
}

#sitemapHostBtn a.selected, #sitemapHostBtn a.selected:hover {
    background: url('images/sitemap_off.png');
    background: url('images/sitemap_off.svg'),linear-gradient(transparent, transparent);
}

#sitemapHost .pageButtonHeader {
    top: -27px;
}

#sitemapTreeContainer {
    overflow: auto;
    width: 100%;
    height: 100%;
    -webkit-overflow-scrolling: touch;
}

.sitemapTree {
    margin: 0px 0px 10px 0px;
    overflow:visible;
}

.sitemapTree ul {
    list-style-type: none;
    margin: 0px 0px 0px 0px;
    padding-left: 0px;
}

.sitemapPlusMinusLink 
{
}

.sitemapMinus 
{
\tvertical-align:middle;
    background: url('images/minus.gif');
    background-repeat: no-repeat;
\tmargin-right: 3px;\t
\tmargin-bottom: 1px;
    height:9px;
    width:9px;
    display:inline-block;
}

.sitemapPlus 
{
\tvertical-align:middle;
    background: url('images/plus.gif');
    background-repeat: no-repeat;
\tmargin-right: 3px;\t
\tmargin-bottom: 1px;
\theight:9px;
    width:9px;
    display:inline-block;
}

.sitemapPageLink 
{
    margin-left: 0px;
}

.sitemapPageIcon 
{
\tmargin: 0px 0px -3px 4px;
    width: 16px;
    height: 16px;
    display: inline-block;
    background: url('images/page.png') no-repeat center center;
    background: url('images/page.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

.sitemapFlowIcon
{
    background: url('images/flow.png') no-repeat center center;
    background: url('images/flow.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

.sitemapFolderIcon
{
    background: url('images/folder_closed.png') no-repeat center center;
    background: url('images/folder_closed.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

.sitemapFolderOpenIcon
{
    background: url('images/folder_open.png') no-repeat center center;
    background: url('images/folder_open.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

.sitemapPageName 
{
    margin-left: 7px;
}

.sitemapNode 
{
    /*margin:4px 0px 4px 0px;*/
    white-space:nowrap;
}

.sitemapPageLinkContainer {
    /*display: inline-block;*/
    margin-left: 0px;
    padding: 4px 0px 4px 0px;
}
/*
.sitemapNode div
{
\tpadding-top: 1px; 
\tpadding-bottom: 3px;
    padding-left: 20px;
\theight: 14px;
}
*/

.sitemapExpandableNode 
{
\tmargin-left: 0px;
}

.sitemapHighlight 
{
    /*display: inline-block;*/
\tbackground-color : #C8E0F0;
    font-weight: bold;
}

.sitemapGreyedName
{
\tcolor: #AAA;
}


.pluginNameHeader
{
    font-family: 'Trebuchet MS';
\tfont-size: 12px;
    letter-spacing: 1px;
\t/*font-weight: bold;*/
\twhite-space: nowrap;
    margin-bottom: 5px;
}

.pageNameHeader
{
    font-family: 'Trebuchet MS';
    /*display: inline-block;*/
    /*float: left;*/
\tfont-size: 15px;
\tfont-weight: bold;
\t/*height: 23px;*/
    padding-right: 77px;
\twhite-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.pageButtonHeader
{
    float: right;
    position: relative;
    /*width: 72px;*/
\theight: 24px;
    top: -22px;
    margin-bottom: -24px;
}

.sitemapHeader
{
    padding-top: 27px;
    border-bottom: 1px solid #d9d9d9;
    min-width: 110px;
}

.sitemapToolbar {
    margin: 0px 5px 14px 12px;
}

.sitemapToolbarButton
{
    float: left;
    width: 22px;
    height: 22px;
    border: 1px solid transparent;
}

#linksButton {
    background: url('images/share.png') no-repeat center center;
    background: url('images/share.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#linksButton:hover {
    background: url('images/share_hover.png') no-repeat center center;
    background: url('images/share_hover.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#linksButton.sitemapToolbarButtonSelected, .hashover #linksButton.sitemapToolbarButtonSelected:hover {
    background: url('images/share_on.png') no-repeat center center;
    background: url('images/share_on.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#adaptiveButton {
    background: url('images/views.png') no-repeat center center;
    background: url('images/views.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#adaptiveButton:hover {
    background: url('images/views_hover.png') no-repeat center center;
    background: url('images/views_hover.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#adaptiveButton.sitemapToolbarButtonSelected, #adaptiveButton.sitemapToolbarButtonSelected:hover {
    background: url('images/views_on.png') no-repeat center center;
    background: url('images/views_on.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#highlightInteractiveButton {
    background: url('images/hotspots.png') no-repeat center center;
    background: url('images/hotspots.svg') no-repeat center center, linear-gradient(transparent,transparent);
    margin-top: 1px;
}

#highlightInteractiveButton:hover {
    background: url('images/hotspots_hover.png') no-repeat center center;
    background: url('images/hotspots_hover.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#highlightInteractiveButton.sitemapToolbarButtonSelected, #highlightInteractiveButton.sitemapToolbarButtonSelected:hover {
    background: url('images/hotspots_on.png') no-repeat center center;
    background: url('images/hotspots_on.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

/*#variablesButton {
    background: url('images/229_variables_16.png') no-repeat center center;
}*/

#searchButton {
    background: url('images/232_search_16.png') no-repeat center center;
}

.sitemapLinkContainer
{
\tmargin-top: 8px;
\tpadding-right: 5px;
\t/*font-size: 12px;*/
}

.sitemapLinkField 
{
\twidth: 100%;
\tfont-size: 12px;
\tmargin-top: 3px;
    padding: 5px;
}

.sitemapRadioSelected {
    font-weight: bold;
}

.sitemapOptionContainer
{
\tmargin-top: 8px;
\tpadding-right: 5px;
\t/*font-size: 12px;*/
}

#sitemapOptionsDiv
{
\tmargin-top: 10px;
\t/*margin-left: 16px;*/
}

#viewSelectDiv
{
    padding: 2px 0px 0px 0px;
\t/*margin-left: 5px;*/
}

#viewSelect
{
\twidth: 70%;
}

.sitemapUrlOption
{
\tpadding-bottom: 8px;
}

.optionLabel
{
\tfont-size: 12px;
}

.sitemapPopupContainer
{
    display: none;
    position: absolute;
\tbackground-color: #F4F4F4;
\tborder: 1px solid #B9B9B9;
\tpadding: 5px 5px 5px 5px;
\tmargin: 5px 0px 0px 5px;
    z-index: 1;
}

#sitemapLinksContainer {
    border-top: 1px solid #d9d9d9;
    padding: 10px;
    margin-left: 0px;
    /*line-height: 18px;*/
}

#adaptiveViewsContainer {
    border-top: 1px solid #d9d9d9;
    padding: 10px;
    margin-left: 0px;
    line-height: 18px;
}

.adaptiveViewOption
{
\tpadding: 2px;
}

.adaptiveViewOption:hover
{ 
\tbackground-color: rgb(204,235,248);
\tcursor: pointer;
}

.currentAdaptiveView {
    font-weight: bold;
}

.adaptiveCheckboxDiv {
\theight: 15px;
\twidth: 15px;
\tfloat: left;
}

.checkedAdaptive {
\tbackground: url('images/adaptivecheck.png') no-repeat center center;
}

/*#variablesContainer 
{
\tmax-height: 350px;
\toverflow: auto;
}*/

/*#variablesClearLink 
{
\tcolor: #069;
\tleft: 5px;
}*/

#searchDiv {
    padding: 8px 12px 11px 12px;
}

#searchBox {
    width: 100%;
    border: none;
    border-top: 1px solid #d9d9d9;
    /*border-bottom: 1px solid #d9d9d9;*/
    padding: 5px;
    font-size: 12px;
}

.searchBoxHint 
{
\tcolor: #8f949a;
\t/*font-style: italic;*/
}

#sitemapLinksPageName
{
\tfont-weight: bold;
}

#sitemapOptionsHeader
{
\tfont-weight: bold;
}";
    }

    public function getTemplateName()
    {
        return "1.0/plugins/sitemap/styles/sitemap.css";
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
        return new Twig_Source("", "1.0/plugins/sitemap/styles/sitemap.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/plugins/sitemap/styles/sitemap.css");
    }
}
