<?php

/* forbusiness/forbusiness.html.twig */
class __TwigTemplate_7d05164a8afcbdc860e79c03c2ec6da97790a41fa5b7d1e9bfe3f69322b61635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forbusiness/forbusiness.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "slider/slider.html.twig");
        echo "
";
    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        echo "forbusiness";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forbusiness/forbusiness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block slider %}*/
/*     {{include ('slider/slider.html.twig')}}*/
/* {% endblock %}*/
/* */
/* {% block body_id 'forbusiness' %}*/
/* */
/* {% block main %}*/
/* {% endblock %}*/
