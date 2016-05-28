<?php

/* user/user_sidebar.html.twig */
class __TwigTemplate_f585ef2e3d63d85762869b382149e55e6576f61168f7941401c604c49113c1a2 extends Twig_Template
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
    <ul>
        <li><a href=\"/user/account\" ";
        // line 3
        if (((isset($context["type"]) ? $context["type"] : null) == "account")) {
            echo " class=\"selected\" ";
        }
        echo ">Account</a></li>
        <li><a href=\"#\" ";
        // line 4
        if (((isset($context["type"]) ? $context["type"] : null) == "affiliate")) {
            echo " class=\"selected\" ";
        }
        echo ">Affiliate Center</a></li>
        <li><a href=\"/user/minutes\" ";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : null) == "minutes")) {
            echo " class=\"selected\" ";
        }
        echo ">Minutes</a></li>
        <li><a href=\"/user/subscription\" ";
        // line 6
        if (((isset($context["type"]) ? $context["type"] : null) == "subscriptions")) {
            echo " class=\"selected\" ";
        }
        echo ">Subscriptions</a></li>
        <li><a href=\"#\" ";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : null) == "sessions")) {
            echo " class=\"selected\" ";
        }
        echo ">MSM Sessions</a></li>
        <li><a href=\"#\" ";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : null) == "tutorial")) {
            echo " class=\"selected\" ";
        }
        echo ">Tutorials</a></li>
        <li><a href=\"#\" ";
        // line 9
        if (((isset($context["type"]) ? $context["type"] : null) == "report")) {
            echo " class=\"selected\" ";
        }
        echo ">Report a Problem</a></li>
        <li><a href=\"#\" ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : null) == "tracking")) {
            echo " class=\"selected\" ";
        }
        echo ">Tracking My Technical Issue</a></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/user_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  53 => 8,  47 => 7,  41 => 6,  35 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="sidebar col-md-3 col-xs-12">*/
/*     <ul>*/
/*         <li><a href="/user/account" {% if (type == 'account') %} class="selected" {% endif %}>Account</a></li>*/
/*         <li><a href="#" {% if (type == 'affiliate') %} class="selected" {% endif %}>Affiliate Center</a></li>*/
/*         <li><a href="/user/minutes" {% if (type == 'minutes') %} class="selected" {% endif %}>Minutes</a></li>*/
/*         <li><a href="/user/subscription" {% if (type == 'subscriptions') %} class="selected" {% endif %}>Subscriptions</a></li>*/
/*         <li><a href="#" {% if (type == 'sessions') %} class="selected" {% endif %}>MSM Sessions</a></li>*/
/*         <li><a href="#" {% if (type == 'tutorial') %} class="selected" {% endif %}>Tutorials</a></li>*/
/*         <li><a href="#" {% if (type == 'report') %} class="selected" {% endif %}>Report a Problem</a></li>*/
/*         <li><a href="#" {% if (type == 'tracking') %} class="selected" {% endif %}>Tracking My Technical Issue</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
