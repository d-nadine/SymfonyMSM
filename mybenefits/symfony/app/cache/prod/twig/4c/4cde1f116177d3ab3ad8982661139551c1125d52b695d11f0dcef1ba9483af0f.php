<?php

/* user/account.html.twig */
class __TwigTemplate_a497acc2b27fe7a6757251829a2251c07d58384514704308777f5eba1720b5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/account.html.twig", 1);
        $this->blocks = array(
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
    public function block_body_id($context, array $blocks = array())
    {
        echo "account";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <div class='row'>
        ";
        // line 7
        $this->loadTemplate("user/user_sidebar.html.twig", "user/account.html.twig", 7)->display(array_merge($context, array("type" => "account")));
        // line 8
        echo "        
        <div class='col-md-9 col-xs-12 sidecontent'>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'account' %}*/
/* */
/* {% block main %}*/
/*     <div class='row'>*/
/*         {% include 'user/user_sidebar.html.twig' with {'type': 'account'} %}*/
/*         */
/*         <div class='col-md-9 col-xs-12 sidecontent'>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
