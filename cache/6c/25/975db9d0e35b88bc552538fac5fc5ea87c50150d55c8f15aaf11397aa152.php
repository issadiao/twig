<?php

/* subtemplates/header2.twig */
class __TwigTemplate_6c25975db9d0e35b88bc552538fac5fc5ea87c50150d55c8f15aaf11397aa152 extends Twig_Template
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
        echo "<div class=\"container visible-lg visible-md\">
    <div class=\"col-md-12\">
        <div class=\"text-center\"><img src=\"/assets/placeholder-banner-ad.png\"></div>
    </div>
</div>

<hr class=\"visible-lg visible-md\">

<div class=\"container visible-lg visible-md\">
    <div class=\"col-md-5\">
        <img src=\"/assets/logo.png\">
    </div>
    <div class=\"col-md-3\">
        <img src=\"/assets/magazine.png\" style=\"margin-top:-25px\">
        TEMPLATE 2
    </div>
    <div class=\"col-md-2\">
        NEWSLETTER DAILY PDF
    </div>
    <div class=\"col-md-2\">
        <img src=\"/assets/social-top.jpg\">
    </div>
</div>

<!-- navbar -->
<div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            <div class=\"navbar-brand col-xs-5 visible-xs visible-sm\"><a href=\"/\"><img src=\"/assets/logo-sm.png\"></a></div>
            <div class=\"navbar-text col-xs-3 visible-xs visible-sm\"><a href=\"#\">SUBSCRIBE</a></div>

        </div>


        <div class=\"navbar-collapse collapse col-md-6 col-lg-9\">
            <ul class=\"nav navbar-nav\">
                <?php //echo thr_functions_menu(\"menu-thr-nav\"); ?>
            </ul>
        </div><!--/.nav-collapse -->

        <div class=\"col-lg-3 visible-lg pull-right\">
            <form class=\"navbar-form\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "subtemplates/header2.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  24 => 4,  47 => 17,  45 => 16,  42 => 15,  40 => 14,  37 => 13,  35 => 12,  28 => 5,  26 => 6,  19 => 1,);
    }
}
