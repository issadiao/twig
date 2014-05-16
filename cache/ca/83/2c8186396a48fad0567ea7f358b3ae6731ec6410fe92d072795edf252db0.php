<?php

/* subtemplates/head.twig */
class __TwigTemplate_ca832c8186396a48fad0567ea7f358b3ae6731ec6410fe92d072795edf252db0 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta_tags"]) ? $context["meta_tags"] : null), "description"), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta_tags"]) ? $context["meta_tags"] : null), "keywords"), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta_tags"]) ? $context["meta_tags"] : null), "author"), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta_tags"]) ? $context["meta_tags"] : null), "title"), "html", null, true);
        echo "</title>

<!-- Bootstrap core CSS -->
<link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

<!-- Custom CSS -->
<link href=\"/css/custom.css\" rel=\"stylesheet\">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->";
    }

    public function getTemplateName()
    {
        return "subtemplates/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  24 => 4,  47 => 17,  45 => 16,  42 => 15,  40 => 14,  37 => 13,  35 => 12,  28 => 5,  26 => 6,  19 => 1,);
    }
}
