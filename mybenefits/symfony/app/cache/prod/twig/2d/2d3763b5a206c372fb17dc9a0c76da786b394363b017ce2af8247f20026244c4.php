<?php

/* sidebar/overview_sidebar.html.twig */
class __TwigTemplate_42a5141d71ab212f490fb37f4a93d348edc9862201eb080e0dc5a629685e2cfc extends Twig_Template
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
        echo "<div class=\"sidebar col-md-3 col-xs-12\">
\t<ul><li><a href=\"/ourcompany\" ";
        // line 2
        if (((isset($context["type"]) ? $context["type"] : null) == "ourcompany")) {
            echo " class='selected' ";
        }
        echo ">Our Company</a></li>
\t<li><a href=\"/casestudies\" ";
        // line 3
        if (((isset($context["type"]) ? $context["type"] : null) == "casestudies")) {
            echo " class='selected' ";
        }
        echo ">Case Studies</a></li>
\t<li><a href=\"/msmtmfeatures\" ";
        // line 4
        if (((isset($context["type"]) ? $context["type"] : null) == "msmtmfeatures")) {
            echo " class='selected' ";
        }
        echo ">MSM™ Features</a></li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/overview_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="sidebar col-md-3 col-xs-12">*/
/* 	<ul><li><a href="/ourcompany" {% if (type == 'ourcompany') %} class='selected' {% endif %}>Our Company</a></li>*/
/* 	<li><a href="/casestudies" {% if (type == 'casestudies') %} class='selected' {% endif %}>Case Studies</a></li>*/
/* 	<li><a href="/msmtmfeatures" {% if (type == 'msmtmfeatures') %} class='selected' {% endif %}>MSM™ Features</a></li>*/
/* 	</ul>*/
/* </div>*/
/* */
