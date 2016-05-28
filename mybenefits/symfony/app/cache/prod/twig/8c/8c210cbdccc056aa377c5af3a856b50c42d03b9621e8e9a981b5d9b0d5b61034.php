<?php

/* overview/ourcompany.html.twig */
class __TwigTemplate_6d6ec00541414534631e96c2a83c3c0639ea6fc45c11cb06a6f3fc89f554bcb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "overview/ourcompany.html.twig", 1);
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
        echo "    <div class='row'>
        ";
        // line 11
        $this->loadTemplate("sidebar/overview_sidebar.html.twig", "overview/ourcompany.html.twig", 11)->display(array_merge($context, array("type" => "ourcompany")));
        // line 12
        echo "
\t\t<div id=\"content-group\" class=\"content-group region nested grid12-9\">
\t\t          <a name=\"main-content-area\" id=\"main-content-area\"></a>
\t\t          <div id=\"breadcrumbs\" class=\"breadcrumbs block\">
\t\t<div id=\"breadcrumbs-inner\" class=\"breadcrumbs-inner gutter\">
\t\t<h2 class=\"element-invisible\">You are here</h2><div class=\"breadcrumb\"><a href=\"/\">Home</a> » <a href=\"/our-company\" class=\"active-trail active\">Overview</a></div></div><!-- /breadcrumbs-inner -->
\t\t</div><!-- /breadcrumbs -->
\t\t                                        <div id=\"content-inner\" class=\"content-inner block\">
\t\t            <div id=\"content-inner-inner\" class=\"content-inner-inner inner\">
\t\t                                          <h1 class=\"title\">Our Company</h1>
\t\t                                                        <div id=\"content-content\" class=\"content-content\">
\t\t                
\t\t<!-- content region -->
\t\t<div id=\"content\" class=\"region region-content content nested grid12-9\">
\t\t  <div id=\"block-system-main\" class=\"block block-system msm-session first last odd\">
\t\t  <div class=\"gutter inner clearfix\">
\t\t            
\t\t    <div class=\"content clearfix\">
\t\t      <div id=\"node-738\" class=\"node node-page odd full-node clearfix\" about=\"/our-company\" typeof=\"foaf:Document\">
\t\t  <div class=\"inner\">
\t\t    
\t\t            <span property=\"dc:title\" content=\"Our Company\" class=\"rdf-meta element-hidden\"></span>
\t\t    
\t\t    <div class=\"content\">
\t\t      <div class=\"field field-name-body field-type-text-with-summary field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\" property=\"content:encoded\"><p>Meet the force behind MySecureMeeting™ (MSM™).</p>
\t\t<div class=\"grid12-4 left\">
\t\t       <h3>Mary Lee Weir, CEO</h3>
\t\t     <img alt=\"Mary Lee Weir, CEO Satya Media Group\" src=\"img/files/maryleeweir.jpg\">
\t\t    <p>Mary Lee has been developing for over 15 years in the information technology industry. She is the Founder and Visionary behind MSM™ and has worked for over three years, with her team, to develop and bring MSM™ to market.</p>
\t\t  <h3>Dong Le, Programmer</h3>
\t\t<img src=\"img/files/dong_le.jpg\">
\t\t<p>Dong hails to us from Vietnam. He has over 10 years experience with web-programming in general. </p>
\t\t <h3>Mica Carlile, UI Designer</h3>
\t\t  <img src=\"img/files/micajane.jpg\">
\t\t <p> Mica is a multi-talented illustrator and the UI designer behind MSM™'s interface.</p>
\t\t</div>
\t\t<div class=\"grid12-4 right\">
\t\t    <h3>Andrew Sang, Lead Programmer</h3>
\t\t  <img alt=\"Marie Monhan, CEO Satya Media Group\" src=\"img/files/drew_sang.jpg\">
\t\t  <p>Andrew \"Drew\" Sang is MSM™'s Lead Programmer, hailing to us from Nairobi, Kenya.  He has over 9 years of experience with programming and high performance hosting, including lamp and server side languages. </p> 

\t\t  <h3>Usman Uwan, iOS Developer</h3>
\t\t <img src=\"img/files/usman_awan.jpg\">
\t\t<p>Programming is Usman's passion. He has a varied language and platform background, however in the last three years he has been programming on iOS.</p>
\t\t 
\t\t <h3>Jignesh Bhalsod, Programmer</h3>
\t\t <img src=\"img/files/jigneshbhalsod.jpg\">
\t\t<p>Jignesh hails to us from Gujart, India, he has worked extensively with Mary Lee on many web programming projects over the years, including MSM™ development.</p>
\t\t</div>

\t\t<p>&nbsp;</p>
\t\t<p><i>MySecureMeeting™ is a proprietary software developed by <a href=\"http://satyamediagroup.com\" target=\"_blank\" title=\"Satya Media Group, MySecureMeeting™\">Satya Media Group</a>.</i></p>
\t\t<p><a class=\"button\" href=\"http://satyamediagroup.com/about.html\" target=\"_blank\">Full Team</a></p>
\t\t</div></div></div>    </div>

\t\t          </div><!-- /inner -->
\t\t</div>
\t\t    </div>
\t\t  </div><!-- /block-inner -->
\t\t</div><!-- /block -->
\t\t</div><!-- /content -->
\t\t              </div><!-- /content-content -->
\t\t            </div><!-- /content-inner-inner -->
\t\t          </div><!-- /content-inner -->
\t\t        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "overview/ourcompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  52 => 11,  49 => 10,  46 => 9,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/*     <div class='row'>*/
/*         {% include 'sidebar/overview_sidebar.html.twig' with {'type': 'ourcompany'} %}*/
/* */
/* 		<div id="content-group" class="content-group region nested grid12-9">*/
/* 		          <a name="main-content-area" id="main-content-area"></a>*/
/* 		          <div id="breadcrumbs" class="breadcrumbs block">*/
/* 		<div id="breadcrumbs-inner" class="breadcrumbs-inner gutter">*/
/* 		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><a href="/">Home</a> » <a href="/our-company" class="active-trail active">Overview</a></div></div><!-- /breadcrumbs-inner -->*/
/* 		</div><!-- /breadcrumbs -->*/
/* 		                                        <div id="content-inner" class="content-inner block">*/
/* 		            <div id="content-inner-inner" class="content-inner-inner inner">*/
/* 		                                          <h1 class="title">Our Company</h1>*/
/* 		                                                        <div id="content-content" class="content-content">*/
/* 		                */
/* 		<!-- content region -->*/
/* 		<div id="content" class="region region-content content nested grid12-9">*/
/* 		  <div id="block-system-main" class="block block-system msm-session first last odd">*/
/* 		  <div class="gutter inner clearfix">*/
/* 		            */
/* 		    <div class="content clearfix">*/
/* 		      <div id="node-738" class="node node-page odd full-node clearfix" about="/our-company" typeof="foaf:Document">*/
/* 		  <div class="inner">*/
/* 		    */
/* 		            <span property="dc:title" content="Our Company" class="rdf-meta element-hidden"></span>*/
/* 		    */
/* 		    <div class="content">*/
/* 		      <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p>Meet the force behind MySecureMeeting™ (MSM™).</p>*/
/* 		<div class="grid12-4 left">*/
/* 		       <h3>Mary Lee Weir, CEO</h3>*/
/* 		     <img alt="Mary Lee Weir, CEO Satya Media Group" src="img/files/maryleeweir.jpg">*/
/* 		    <p>Mary Lee has been developing for over 15 years in the information technology industry. She is the Founder and Visionary behind MSM™ and has worked for over three years, with her team, to develop and bring MSM™ to market.</p>*/
/* 		  <h3>Dong Le, Programmer</h3>*/
/* 		<img src="img/files/dong_le.jpg">*/
/* 		<p>Dong hails to us from Vietnam. He has over 10 years experience with web-programming in general. </p>*/
/* 		 <h3>Mica Carlile, UI Designer</h3>*/
/* 		  <img src="img/files/micajane.jpg">*/
/* 		 <p> Mica is a multi-talented illustrator and the UI designer behind MSM™'s interface.</p>*/
/* 		</div>*/
/* 		<div class="grid12-4 right">*/
/* 		    <h3>Andrew Sang, Lead Programmer</h3>*/
/* 		  <img alt="Marie Monhan, CEO Satya Media Group" src="img/files/drew_sang.jpg">*/
/* 		  <p>Andrew "Drew" Sang is MSM™'s Lead Programmer, hailing to us from Nairobi, Kenya.  He has over 9 years of experience with programming and high performance hosting, including lamp and server side languages. </p> */
/* */
/* 		  <h3>Usman Uwan, iOS Developer</h3>*/
/* 		 <img src="img/files/usman_awan.jpg">*/
/* 		<p>Programming is Usman's passion. He has a varied language and platform background, however in the last three years he has been programming on iOS.</p>*/
/* 		 */
/* 		 <h3>Jignesh Bhalsod, Programmer</h3>*/
/* 		 <img src="img/files/jigneshbhalsod.jpg">*/
/* 		<p>Jignesh hails to us from Gujart, India, he has worked extensively with Mary Lee on many web programming projects over the years, including MSM™ development.</p>*/
/* 		</div>*/
/* */
/* 		<p>&nbsp;</p>*/
/* 		<p><i>MySecureMeeting™ is a proprietary software developed by <a href="http://satyamediagroup.com" target="_blank" title="Satya Media Group, MySecureMeeting™">Satya Media Group</a>.</i></p>*/
/* 		<p><a class="button" href="http://satyamediagroup.com/about.html" target="_blank">Full Team</a></p>*/
/* 		</div></div></div>    </div>*/
/* */
/* 		          </div><!-- /inner -->*/
/* 		</div>*/
/* 		    </div>*/
/* 		  </div><!-- /block-inner -->*/
/* 		</div><!-- /block -->*/
/* 		</div><!-- /content -->*/
/* 		              </div><!-- /content-content -->*/
/* 		            </div><!-- /content-inner-inner -->*/
/* 		          </div><!-- /content-inner -->*/
/* 		        </div>*/
/*     </div>*/
/* {% endblock %}*/
