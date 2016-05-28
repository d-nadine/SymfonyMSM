<?php

/* security/login.html.twig */
class __TwigTemplate_78e4d3ce98856059fff58bee442103b1297113528d207cc47dfdfda56a8575dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "login";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"field-set col-md-6 col-sm-12\">
            <form id=\"login-form\" name=\"login-form\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                </fieldset>
                <div class=\"form-group\">
                    <label for=\"username\">USERNAME</label>
                    <input id=\"username\" name=\"_username\" type=\"text\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">USERNAME</label>
                    <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\">
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>                
                <button type=\"submit\" class=\"btn btn-primary\">
                    Login
                </button>
            </form>
        </div>
        <div class=\"field-set col-md-6 col-sm-12\">
            <form id=\"signup-form\" name=\"signup-form\" action=\"/en/signup_check\" method=\"post\">
                <fieldset>
                    <legend>Sign Up</legend>
                </fieldset>
                <div class=\"form-group\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae libero eu tortor congue commodo. Proin eget sapien erat. Morbi interdum magna eu lacinia interdum. Etiam tristique varius vulputate.</p>
                </div>
                <div class=\"form-group\">
                    <label for=\"email\">EMAIL</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"first-name\">FIRST NAME</label>
                    <input id=\"first-name\" type=\"text\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"last-name\">LAST NAME</label>
                    <input id=\"last-name\" type=\"text\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"last-name\">LAST NAME</label>
                    <input id=\"last-name\" type=\"text\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"last-name\">LAST NAME</label>
                    <input id=\"last-name\" type=\"text\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            \$('#username').val('anna_admin');
            \$('#password').val('kitten');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 69,  116 => 68,  71 => 26,  56 => 14,  51 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'login' %}*/
/* */
/* {% block main %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">*/
/*             {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="field-set col-md-6 col-sm-12">*/
/*             <form id="login-form" name="login-form" action="{{ path('security_login_check') }}" method="post">*/
/*                 <fieldset>*/
/*                     <legend>Login</legend>*/
/*                 </fieldset>*/
/*                 <div class="form-group">*/
/*                     <label for="username">USERNAME</label>*/
/*                     <input id="username" name="_username" type="text" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="password">USERNAME</label>*/
/*                     <input id="password" name="_password" type="password" class="form-control">*/
/*                 </div>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>                */
/*                 <button type="submit" class="btn btn-primary">*/
/*                     Login*/
/*                 </button>*/
/*             </form>*/
/*         </div>*/
/*         <div class="field-set col-md-6 col-sm-12">*/
/*             <form id="signup-form" name="signup-form" action="/en/signup_check" method="post">*/
/*                 <fieldset>*/
/*                     <legend>Sign Up</legend>*/
/*                 </fieldset>*/
/*                 <div class="form-group">*/
/*                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae libero eu tortor congue commodo. Proin eget sapien erat. Morbi interdum magna eu lacinia interdum. Etiam tristique varius vulputate.</p>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="email">EMAIL</label>*/
/*                     <input id="email" type="email" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="first-name">FIRST NAME</label>*/
/*                     <input id="first-name" type="text" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="last-name">LAST NAME</label>*/
/*                     <input id="last-name" type="text" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="last-name">LAST NAME</label>*/
/*                     <input id="last-name" type="text" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="last-name">LAST NAME</label>*/
/*                     <input id="last-name" type="text" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-primary">*/
/*                     Sign Up*/
/*                 </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('#username').val('anna_admin');*/
/*             $('#password').val('kitten');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
