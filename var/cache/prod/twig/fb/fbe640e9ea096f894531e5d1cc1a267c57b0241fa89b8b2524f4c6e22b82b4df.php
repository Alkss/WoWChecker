<?php

/* 1.0/resources/expand.html */
class __TwigTemplate_034d05c5afaf442629e8958f9c72ddff67239f9b8b67fbfda3a9a7536c110c92 extends Twig_Template
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
        echo "﻿<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<html>
<head>
    <title></title>
    <link type=\"text/css\" href=\"css/default.css\" rel=\"Stylesheet\" />
    <script type=\"text/javascript\" src=\"scripts/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/messagecenter.js\"></script>
    <script type=\"text/javascript\">
<!--
            \$(document).ready(function () {
                \$axure.messageCenter.addMessageListener(messageCenter_message);
                function messageCenter_message(message, data) {
                    if(message == 'collapseFrameOnLoad') {
                        setTimeout(function() {
                            \$('#maximizePanel').animate({
                                top:'-' + maxPanelHeight + 'px'
                            }, 300);
                        }, 2000);
                    }
                }
                \$axure.messageCenter.postMessage('getCollapseFrameOnLoad');

                if(MOBILE_DEVICE) {
                    \$('#maximizePanel').height('45px');
                }
                var maxPanelHeight = \$('#maximizePanel').height();

                \$('#maximizePanel').click(function () {
                    \$(this).removeClass('maximizePanelOver');
                    \$axure.messageCenter.postMessage('expandFrame');
                });

                if(!MOBILE_DEVICE) {
                    \$('#maximizePanel').mouseenter(function() {
                        \$(this).addClass('maximizePanelOver');
                    });
                    \$('#maximizePanel').mouseout(function() {
                        if(\$(this).hasClass('maximizePanelOver')) {
                            \$(this).animate({
                                top:'-' + maxPanelHeight + 'px'
                            }, 300);
                        }
                        \$(this).removeClass('maximizePanelOver');
                    });
                    \$('#maximizePanelOver').mouseenter(function() {
                        \$('#maximizePanel').animate({
                            top:'0px'
                        }, 100);
                    });
                }
            });
        --></script>
</head>
<body style=\"background-color: transparent;\">
    <div id=\"maximizePanelOver\">
        <div id=\"maximizePanel\" class=\"maximizePanel\" title=\"Expand\">
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "1.0/resources/expand.html";
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
        return new Twig_Source("", "1.0/resources/expand.html", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/expand.html");
    }
}
