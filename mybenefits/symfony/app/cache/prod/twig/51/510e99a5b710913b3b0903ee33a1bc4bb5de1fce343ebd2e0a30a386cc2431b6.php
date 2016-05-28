<?php

/* overview/overview.html.twig */
class __TwigTemplate_19e3e34ee73ed170bfb9bdf2eed996628dba2b6a41d71dff9392be348a677385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "overview/overview.html.twig", 1);
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
        echo "overview";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_include($this->env, $context, "sidebar/sidebar.html.twig");
        echo "
        <div class=\"content-list col-md-9\">
            <div class=\"content-item\"></div>
            <div class=\"content-item\"></div>
            <div class=\"content-item\"></div>
            <div class=\"content-item\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "overview/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  46 => 9,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block slider %}*/
/*     {{include ('slider/slider.html.twig')}}*/
/* {% endblock %}*/
/* */
/* {% block body_id 'overview' %}*/
/* */
/* {% block main %}*/
/*     {{include ('sidebar/sidebar.html.twig')}}*/
/*         <div class="content-list col-md-9">*/
/*             <div class="content-item"></div>*/
/*             <div class="content-item"></div>*/
/*             <div class="content-item"></div>*/
/*             <div class="content-item"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
