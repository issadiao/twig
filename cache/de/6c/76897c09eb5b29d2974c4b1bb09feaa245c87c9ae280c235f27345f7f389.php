<?php

/* news1.twig */
class __TwigTemplate_de6c76897c09eb5b29d2974c4b1bb09feaa245c87c9ae280c235f27345f7f389 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    ";
        // line 6
        $this->env->loadTemplate("subtemplates/head.twig")->display($context);
        // line 7
        echo "
</head>

<body>

    ";
        // line 12
        $this->env->loadTemplate("subtemplates/header.twig")->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->env->loadTemplate("subtemplates/article.twig")->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->env->loadTemplate("subtemplates/footer.twig")->display($context);
        // line 17
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/bootstrap-hover-dropdown.min.js\"></script>

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "news1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  45 => 16,  42 => 15,  40 => 14,  37 => 13,  35 => 12,  28 => 7,  26 => 6,  19 => 1,);
    }
}
