<?php

/* base.html.twig */
class __TwigTemplate_1bf73ea4854447d7a45eaa93f1ab7c977fd71360ec96b8a9ff11592d6e1a807a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'msm_footer' => array($this, 'block_msm_footer'),
            'footer' => array($this, 'block_footer'),
            'download_one_sheet' => array($this, 'block_download_one_sheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>MySecureMeeting™ | One click away, secure video conferencing (calling)</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 32
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "    ";
        $this->displayBlock('slider', $context, $blocks);
        // line 92
        echo "    <div class=\"container body-container\">
        ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "\t\t";
        $this->displayBlock('msm_footer', $context, $blocks);
        // line 103
        echo "</div>

";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('javascripts', $context, $blocks);
        // line 218
        echo "</body>
</html>
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/front.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 32
    public function block_body_id($context, array $blocks = array())
    {
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "            <header>
                ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 36
            echo "                <div class=\"wrapper-header-top clearfix\">
                    <!-- header-top region -->
                    <div id=\"header-top\" class=\"region region-header-top header-top  grid12-12\">
                        <div id=\"block-block-41\" class=\"block block-block first last odd\">
                            <div class=\"gutter inner clearfix\">
                                <div class=\"content clearfix\">
                                    <ul class=\"menu\">
                                        <li><a class=\"tutorial\" title=\"MySecureMeeting Sign up\" href=\"#\">Tutorials</a></li>
                                        <li><a class=\"dashboard\" title=\"MySecureMeeting Sign up\" href=\"/user/dashboard\">Dashboard</a></li>
                                        <li><a class=\"log_out\" title=\"MySecureMeeting Log in\" href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Log Out</a></li>
                                    </ul>
                                </div>
                            </div><!-- /block-inner -->
                        </div><!-- /block -->
                    </div><!-- /header-top -->
                </div>
                ";
        } else {
            // line 53
            echo "                <div class=\"wrapper-header-top clearfix\">
                    <!-- header-top region -->
                    <div id=\"header-top\" class=\"region region-header-top header-top  grid12-12\">
                        <div id=\"block-block-41\" class=\"block block-block first last odd\">
                            <div class=\"gutter inner clearfix\">
                                <div class=\"content clearfix\">
                                    <ul class=\"menu\">
                                        <li><a class=\"sign_up\" title=\"MySecureMeeting Sign up\" href=\"/user/register\">Sign Up</a></li>
                                        <li><a class=\"log_in\" title=\"MySecureMeeting Log in\" href=\"/login\">Log In</a></li>
                                    </ul>
                                </div>
                            </div><!-- /block-inner -->
                        </div><!-- /block -->
                    </div><!-- /header-top -->
                </div>
                ";
        }
        // line 69
        echo "
                <div id=\"container-header\">
                    <div id=\"header-group\" class=\"header-group region clearfix grid12-12\">
                        <div id=\"header-site-info\" class=\"header-site-info block\">
                            <div id=\"header-site-info-inner\" class=\"header-site-info-inner inner\">
                                <div id=\"logo\">
                                    <a href=\"/\" title=\"Home\">
                                        <img src=\"/css/images/logo.png\" alt=\"Home\" width=\"321\" height=\"54\"></a>
                                </div>
                            </div><!-- /header-site-info-inner -->
                        </div><!-- /header-site-info -->
                        <div id=\"block-superfish-1\" class=\"block block-superfish first last odd\">
                            <div class=\"gutter inner clearfix\">
                                <div class=\"content clearfix\" id=\"nav\">
                                    ";
        // line 83
        echo $this->env->getExtension('knp_menu')->render("AppBundle:Builder:mainMenu");
        echo "
                                </div>
                            </div><!-- /block-inner -->
                        </div><!-- /block -->
                    </div><!-- /header-group -->
                </div>
            </header>
        ";
    }

    // line 91
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        // line 94
        echo "            <div class=\"row\">
                <div id=\"main\">
                    ";
        // line 96
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                ";
        // line 98
        $this->displayBlock('main', $context, $blocks);
        // line 99
        echo "\t            </div>
        </div>
\t\t";
    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
    }

    // line 102
    public function block_msm_footer($context, array $blocks = array())
    {
    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        // line 106
        echo "    <footer>
        <div id=\"container-footer\" class=\"clearfix\">
            <!-- footer region -->
            <div id=\"footer\" class=\"region region-footer footer  grid12-12\">
                ";
        // line 110
        $this->displayBlock('download_one_sheet', $context, $blocks);
        // line 111
        echo "                <div id=\"block-mailchimp_signup-take_msm_for_a_spin\" class=\"block block-mailchimp-signup   even\">
                    <div class=\"gutter inner clearfix\">
                        <h2 class=\"title block-title\">Take MSM™ for a Spin. Try the free demo today</h2>
                        <div class=\"content clearfix\">
                            <form class=\"mailchimp-signup-subscribe-form\" action=\"/\" method=\"post\" id=\"mailchimp-signup-subscribe-block-take-msm-for-a-spin-form\" accept-charset=\"UTF-8\">
                                <div>
                                    <div id=\"mailchimp-newsletter-457581-mergefields\" class=\"mailchimp-newsletter-mergefields\">
                                        <div class=\"form-item form-type-textfield form-item-mergevars-EMAIL\">
                                            <input placeholder=\"Enter your email\" type=\"text\" id=\"edit-mergevars-email\" name=\"mergevars[EMAIL]\" value=\"\" size=\"25\" maxlength=\"128\" class=\"form-text required\">
                                            <input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"Try the Demo\" class=\"btn-primary pull-right\">
                                        </div>
                                    </div>

                                    <input type=\"hidden\" name=\"form_build_id\" value=\"form-zCFEFugx4PEkQ2FN5yaLjMLm8DPM7WOEC3PFQrkTj88\">
                                    <input type=\"hidden\" name=\"form_id\" value=\"mailchimp_signup_subscribe_block_take_msm_for_a_spin_form\">
                                </div>
                            </form>
                        </div>
                    </div><!-- /block-inner -->
                </div><!-- /block -->
                <div id=\"block-block-38\" class=\"block block-block  last odd\">
                    <div class=\"gutter inner clearfix\">
                        <div class=\"content clearfix\">
                            <h2>Like MySecureMeeting™? Share with your colleagues.</h2>
                            <div class=\"social\">
                                <a class=\"icon_facebook\" onclick=\"popUp = window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://mysecuremeeting.com&amp;p[images][0]=http://mysecuremeeting.com/sites/default/files/logo_0.png&amp;p[title]=MySecureMeeting™ | One click away, secure video calling&amp;p[summary]=Secure, Instant, Versionless, Hassle free updating, compatible on all devices. Tired of importing your contact list somewhere else? Own your contacts! Have up-to 10 -20 connections with no downloads, no plugins.',
                                                                'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                        popUp.focus();
                                                        return false\"><span class=\"count\">0</span></a>

                                <a class=\"icon_twitter\" onclick=\"popUp = window.open('https://twitter.com/intent/tweet?url=http://mysecuremeeting.com&amp;text=Secure, Instant, Versionless, Hassle free updating, compatible on all devices. Have up-to 10 -20 connections with no downloads, no plugins.&amp;via=mysecuremeeting.com',
                                                                'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                        popUp.focus();
                                                        return false\"><span id=\"twitterCount\"></span>0</a>

                                <a class=\"icon_google\" onclick=\"popUp = window.open('https://plus.google.com/share?url=http://mysecuremeeting.com',
                                                                'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                        popUp.focus();
                                                        return false\"><span class=\"count\">18</span></a>

                                <a class=\"icon_linkedin\" onclick=\"popUp = window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://mysecuremeeting.com&amp;title=How%20to%20make%20custom%20linkedin%20share%20button&amp;summary=MySecureMeeting™ | One click away, secure video calling&amp;source=mysecuremeeting.com',
                                                                'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                        popUp.focus();
                                                        return false\"><span class=\"count\">15</span></a>
                            </div>
                        </div>
                    </div><!-- /block-inner -->
                </div><!-- /block -->
            </div><!-- /footer -->
        </div>

        <div id=\"container-footer-botom\" class=\"clearfix\">
            <!-- footer-botom region -->
            <div id=\"footer-botom\" class=\"region region-footer-botom footer-botom  grid12-12\">
                <div id=\"block-system-main-menu\" class=\"block block-system block-menu   even\">
                    <div class=\"gutter inner clearfix\">
                        <div class=\"content clearfix\">
                            <ul class=\"menu\"><li class=\"first collapsed\"><a href=\"/overview\">Overview</a></li>
                                <li class=\"collapsed\"><a href=\"/for-business\">MSM™ for Your Business</a></li>
                                <li class=\"leaf\"><a href=\"/pricing\">Pricing</a></li>
                                <li class=\"collapsed\"><a href=\"/support\">Support</a></li>
                                <li class=\"last leaf\"><a href=\"/contact-us\">Contact</a></li>
                            </ul>
                        </div>
                    </div><!-- /block-inner -->
                </div><!-- /block -->
                <div id=\"block-block-40\" class=\"block block-block   odd\">
                    <div class=\"gutter inner clearfix\">
                        <div class=\"content clearfix\" style=\"text-align: right\">
                            <div class=\"social\">
                                <a href=\"http://twitter.com/mysecuremeeting\" target=\"_blank\" class=\"twitter icon-social\"></a>
                                <a href=\"http://instagram.com/mysecuremeeting\" target=\"_blank\" class=\"instagram icon-social\"></a>
                                <a href=\"http://facebook.com/mysecuremeeting\" target=\"_blank\" class=\"facebook icon-social\"></a>
                                <a href=\"https://www.linkedin.com/company/5295453?trk=tyah&amp;trkInfo=idx%3A2-2-5%2CtarId%3A1422475452191%2Ctas%3Amysecure\" target=\"_blank\" class=\"linked icon-social\"></a>
                            </div>
                            <p>
                                <a href=\"/privacy-policy\" title=\"Privacy Policy\" style=\"margin-right:10px;\">Privacy Policy </a> | 
                                <a href=\"/terms-service\" title=\"Terms of Service\" style=\"margin-left:10px;\"> Terms of Service</a>
                            </p>
                        </div>
                    </div><!-- /block-inner -->
                </div><!-- /block -->
                <div id=\"block-block-30\" class=\"block block-block  last even\">
                    <div class=\"gutter inner clearfix\">
                        <div class=\"content clearfix\" style=\"margin-top:16px;\">
                            <p>@MySecureMeeting™</p>
                        </div>
                    </div><!-- /block-inner -->
                </div><!-- /block -->
            </div><!-- /footer-botom -->
        </div>
    </footer>
";
    }

    // line 110
    public function block_download_one_sheet($context, array $blocks = array())
    {
        echo " ";
    }

    // line 205
    public function block_javascripts($context, array $blocks = array())
    {
        // line 206
        echo "    ";
        // line 216
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 216,  334 => 206,  331 => 205,  325 => 110,  229 => 111,  227 => 110,  221 => 106,  218 => 105,  213 => 102,  208 => 98,  202 => 99,  200 => 98,  195 => 96,  191 => 94,  188 => 93,  183 => 91,  171 => 83,  155 => 69,  137 => 53,  126 => 45,  115 => 36,  113 => 35,  110 => 34,  107 => 33,  102 => 32,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  83 => 13,  80 => 12,  74 => 218,  72 => 205,  69 => 204,  67 => 105,  63 => 103,  60 => 102,  58 => 93,  55 => 92,  52 => 91,  50 => 33,  46 => 32,  39 => 29,  37 => 12,  29 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>MySecureMeeting™ | One click away, secure video conferencing (calling)</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# uncomment the following lines to compile SCSS assets with Assetic*/
/*     */
/*                 {% stylesheets filter="scssphp" output="css/app.css"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/bootstrap.scss"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                     "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*                 %}*/
/*                     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*                 {% endstylesheets %}*/
/*             #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/front.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/*         {% block header %}*/
/*             <header>*/
/*                 {% if app.user %}*/
/*                 <div class="wrapper-header-top clearfix">*/
/*                     <!-- header-top region -->*/
/*                     <div id="header-top" class="region region-header-top header-top  grid12-12">*/
/*                         <div id="block-block-41" class="block block-block first last odd">*/
/*                             <div class="gutter inner clearfix">*/
/*                                 <div class="content clearfix">*/
/*                                     <ul class="menu">*/
/*                                         <li><a class="tutorial" title="MySecureMeeting Sign up" href="#">Tutorials</a></li>*/
/*                                         <li><a class="dashboard" title="MySecureMeeting Sign up" href="/user/dashboard">Dashboard</a></li>*/
/*                                         <li><a class="log_out" title="MySecureMeeting Log in" href="{{ path('fos_user_security_logout') }}">Log Out</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div><!-- /block-inner -->*/
/*                         </div><!-- /block -->*/
/*                     </div><!-- /header-top -->*/
/*                 </div>*/
/*                 {% else %}*/
/*                 <div class="wrapper-header-top clearfix">*/
/*                     <!-- header-top region -->*/
/*                     <div id="header-top" class="region region-header-top header-top  grid12-12">*/
/*                         <div id="block-block-41" class="block block-block first last odd">*/
/*                             <div class="gutter inner clearfix">*/
/*                                 <div class="content clearfix">*/
/*                                     <ul class="menu">*/
/*                                         <li><a class="sign_up" title="MySecureMeeting Sign up" href="/user/register">Sign Up</a></li>*/
/*                                         <li><a class="log_in" title="MySecureMeeting Log in" href="/login">Log In</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div><!-- /block-inner -->*/
/*                         </div><!-- /block -->*/
/*                     </div><!-- /header-top -->*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 <div id="container-header">*/
/*                     <div id="header-group" class="header-group region clearfix grid12-12">*/
/*                         <div id="header-site-info" class="header-site-info block">*/
/*                             <div id="header-site-info-inner" class="header-site-info-inner inner">*/
/*                                 <div id="logo">*/
/*                                     <a href="/" title="Home">*/
/*                                         <img src="/css/images/logo.png" alt="Home" width="321" height="54"></a>*/
/*                                 </div>*/
/*                             </div><!-- /header-site-info-inner -->*/
/*                         </div><!-- /header-site-info -->*/
/*                         <div id="block-superfish-1" class="block block-superfish first last odd">*/
/*                             <div class="gutter inner clearfix">*/
/*                                 <div class="content clearfix" id="nav">*/
/*                                     {{knp_menu_render('AppBundle:Builder:mainMenu')}}*/
/*                                 </div>*/
/*                             </div><!-- /block-inner -->*/
/*                         </div><!-- /block -->*/
/*                     </div><!-- /header-group -->*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/*     {% block slider %}{% endblock %}*/
/*     <div class="container body-container">*/
/*         {% block body %}*/
/*             <div class="row">*/
/*                 <div id="main">*/
/*                     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                 {% block main %}{% endblock %}*/
/* 	            </div>*/
/*         </div>*/
/* 		{% endblock %}*/
/* 		{% block msm_footer %}{% endblock %}*/
/* </div>*/
/* */
/* {% block footer %}*/
/*     <footer>*/
/*         <div id="container-footer" class="clearfix">*/
/*             <!-- footer region -->*/
/*             <div id="footer" class="region region-footer footer  grid12-12">*/
/*                 {% block download_one_sheet %} {% endblock %}*/
/*                 <div id="block-mailchimp_signup-take_msm_for_a_spin" class="block block-mailchimp-signup   even">*/
/*                     <div class="gutter inner clearfix">*/
/*                         <h2 class="title block-title">Take MSM™ for a Spin. Try the free demo today</h2>*/
/*                         <div class="content clearfix">*/
/*                             <form class="mailchimp-signup-subscribe-form" action="/" method="post" id="mailchimp-signup-subscribe-block-take-msm-for-a-spin-form" accept-charset="UTF-8">*/
/*                                 <div>*/
/*                                     <div id="mailchimp-newsletter-457581-mergefields" class="mailchimp-newsletter-mergefields">*/
/*                                         <div class="form-item form-type-textfield form-item-mergevars-EMAIL">*/
/*                                             <input placeholder="Enter your email" type="text" id="edit-mergevars-email" name="mergevars[EMAIL]" value="" size="25" maxlength="128" class="form-text required">*/
/*                                             <input type="submit" id="edit-submit" name="op" value="Try the Demo" class="btn-primary pull-right">*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <input type="hidden" name="form_build_id" value="form-zCFEFugx4PEkQ2FN5yaLjMLm8DPM7WOEC3PFQrkTj88">*/
/*                                     <input type="hidden" name="form_id" value="mailchimp_signup_subscribe_block_take_msm_for_a_spin_form">*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div><!-- /block-inner -->*/
/*                 </div><!-- /block -->*/
/*                 <div id="block-block-38" class="block block-block  last odd">*/
/*                     <div class="gutter inner clearfix">*/
/*                         <div class="content clearfix">*/
/*                             <h2>Like MySecureMeeting™? Share with your colleagues.</h2>*/
/*                             <div class="social">*/
/*                                 <a class="icon_facebook" onclick="popUp = window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://mysecuremeeting.com&amp;p[images][0]=http://mysecuremeeting.com/sites/default/files/logo_0.png&amp;p[title]=MySecureMeeting™ | One click away, secure video calling&amp;p[summary]=Secure, Instant, Versionless, Hassle free updating, compatible on all devices. Tired of importing your contact list somewhere else? Own your contacts! Have up-to 10 -20 connections with no downloads, no plugins.',*/
/*                                                                 'popupwindow', 'scrollbars=yes,width=800,height=400');*/
/*                                                         popUp.focus();*/
/*                                                         return false"><span class="count">0</span></a>*/
/* */
/*                                 <a class="icon_twitter" onclick="popUp = window.open('https://twitter.com/intent/tweet?url=http://mysecuremeeting.com&amp;text=Secure, Instant, Versionless, Hassle free updating, compatible on all devices. Have up-to 10 -20 connections with no downloads, no plugins.&amp;via=mysecuremeeting.com',*/
/*                                                                 'popupwindow', 'scrollbars=yes,width=800,height=400');*/
/*                                                         popUp.focus();*/
/*                                                         return false"><span id="twitterCount"></span>0</a>*/
/* */
/*                                 <a class="icon_google" onclick="popUp = window.open('https://plus.google.com/share?url=http://mysecuremeeting.com',*/
/*                                                                 'popupwindow', 'scrollbars=yes,width=800,height=400');*/
/*                                                         popUp.focus();*/
/*                                                         return false"><span class="count">18</span></a>*/
/* */
/*                                 <a class="icon_linkedin" onclick="popUp = window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://mysecuremeeting.com&amp;title=How%20to%20make%20custom%20linkedin%20share%20button&amp;summary=MySecureMeeting™ | One click away, secure video calling&amp;source=mysecuremeeting.com',*/
/*                                                                 'popupwindow', 'scrollbars=yes,width=800,height=400');*/
/*                                                         popUp.focus();*/
/*                                                         return false"><span class="count">15</span></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /block-inner -->*/
/*                 </div><!-- /block -->*/
/*             </div><!-- /footer -->*/
/*         </div>*/
/* */
/*         <div id="container-footer-botom" class="clearfix">*/
/*             <!-- footer-botom region -->*/
/*             <div id="footer-botom" class="region region-footer-botom footer-botom  grid12-12">*/
/*                 <div id="block-system-main-menu" class="block block-system block-menu   even">*/
/*                     <div class="gutter inner clearfix">*/
/*                         <div class="content clearfix">*/
/*                             <ul class="menu"><li class="first collapsed"><a href="/overview">Overview</a></li>*/
/*                                 <li class="collapsed"><a href="/for-business">MSM™ for Your Business</a></li>*/
/*                                 <li class="leaf"><a href="/pricing">Pricing</a></li>*/
/*                                 <li class="collapsed"><a href="/support">Support</a></li>*/
/*                                 <li class="last leaf"><a href="/contact-us">Contact</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div><!-- /block-inner -->*/
/*                 </div><!-- /block -->*/
/*                 <div id="block-block-40" class="block block-block   odd">*/
/*                     <div class="gutter inner clearfix">*/
/*                         <div class="content clearfix" style="text-align: right">*/
/*                             <div class="social">*/
/*                                 <a href="http://twitter.com/mysecuremeeting" target="_blank" class="twitter icon-social"></a>*/
/*                                 <a href="http://instagram.com/mysecuremeeting" target="_blank" class="instagram icon-social"></a>*/
/*                                 <a href="http://facebook.com/mysecuremeeting" target="_blank" class="facebook icon-social"></a>*/
/*                                 <a href="https://www.linkedin.com/company/5295453?trk=tyah&amp;trkInfo=idx%3A2-2-5%2CtarId%3A1422475452191%2Ctas%3Amysecure" target="_blank" class="linked icon-social"></a>*/
/*                             </div>*/
/*                             <p>*/
/*                                 <a href="/privacy-policy" title="Privacy Policy" style="margin-right:10px;">Privacy Policy </a> | */
/*                                 <a href="/terms-service" title="Terms of Service" style="margin-left:10px;"> Terms of Service</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div><!-- /block-inner -->*/
/*                 </div><!-- /block -->*/
/*                 <div id="block-block-30" class="block block-block  last even">*/
/*                     <div class="gutter inner clearfix">*/
/*                         <div class="content clearfix" style="margin-top:16px;">*/
/*                             <p>@MySecureMeeting™</p>*/
/*                         </div>*/
/*                     </div><!-- /block-inner -->*/
/*                 </div><!-- /block -->*/
/*             </div><!-- /footer-botom -->*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*         {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*         {% endjavascripts %}*/
/*     #}*/
/*     <script src="{{ asset('js/app.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
