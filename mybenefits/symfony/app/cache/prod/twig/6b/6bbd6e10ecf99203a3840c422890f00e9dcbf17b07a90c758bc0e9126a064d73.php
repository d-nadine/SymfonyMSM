<?php

/* default/homepage.html.twig */
class __TwigTemplate_ee118e6575a49d9e8cc185b0da35aeb293e03a86c1b98e5c756d017f57655dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'msm_footer' => array($this, 'block_msm_footer'),
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
        echo twig_include($this->env, $context, "slider/video_slider.html.twig");
        echo "
";
    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        echo "homepage";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <div class='row'>
\t\t<div id=\"content\" class=\"region region-content content nested grid12-12\">
\t\t\t<div id=\"block-block-36\" class=\"block block-block   even\">
\t\t\t  <div class=\"gutter inner clearfix\">
\t\t\t            
\t\t\t    <div class=\"content clearfix\">
\t\t\t      <p>&nbsp;</p>
\t\t\t<div class=\"grid12-7 content-image left\">
\t\t\t<div style=\"padding-left:100px\"><img src=\"img/files/apple_btn.png\" width=\"140\" height=\"68\" alt=\"MySecureMeeting™ in the App Store\">&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t<img src=\"img/files/android_btn.png\" width=\"140\" height=\"68\" alt=\"MySecureMeeting™ on Chrome for Android\"></div><br>
\t\t\t</div>

\t\t\t<div class=\"grid12-12 right-content left\">
\t\t\t<p>&nbsp;</p>
\t\t\t  <h2>Instant, Secure Video Calling</h2>
\t\t\t    <p>Companies are using MySecureMeeting's progressive, live video technology to help create unique and innovative experiences.</p>
\t\t\t    <p>The powerful plug-n-play application offers voice, video, messaging and screen-sharing.  It can be embedded into an individual website or it can be scaled to meet the secure communication needs of a large enterprise.  It is a valuable communications feature making interacting online as easy as clicking the \"share\" button on Facebook. 
\t\t\t</p>
\t\t\t<p>&nbsp;</p> 
\t\t\t    <a class=\"button\" href=\"/msm-features\">See All Features</a> &nbsp; &nbsp; <a class=\"button\" href=\"/user\">Get Started</a>
\t\t\t</div>
\t\t\t<p>&nbsp;</p>    </div>
\t\t\t  </div><!-- /block-inner -->
\t\t\t</div>

\t\t\t<div id=\"block-block-60\" class=\"block block-block  last odd\">
\t\t\t  <div class=\"gutter inner clearfix\">
\t\t\t            
\t\t\t    <div class=\"content clearfix\">
\t\t\t       <p>&nbsp;</p>
\t\t\t<div class=\"grid12-12 right-content left\">
\t\t\t<p>&nbsp;</p>
\t\t\t<h2>Instant, Secure Live Broadcasting</h2>
\t\t\t<ul><li>Easily broadcast high quality video from directly inside a website to hundreds of viewers</li>
\t\t\t<li>No phone access necessary, direct connection</li>
\t\t\t<li>Host live tutorials, webinars, workshops, or group discussions</li>
\t\t\t</ul><p>&nbsp;</p>
\t\t\t<p>    <a class=\"button\" href=\"/msm-features\"></a> &nbsp; &nbsp; <a class=\"button\" href=\"/user\">Purchase APP!</a>
\t\t\t</p></div>
\t\t\t<p>&nbsp;</p>
\t\t\t     </div>
\t\t\t  </div><!-- /block-inner -->
\t\t\t</div>
\t\t</div>
    </div>
\t</div>

";
    }

    // line 58
    public function block_msm_footer($context, array $blocks = array())
    {
        // line 59
        echo "    <div class=\"container-msm-bottom-content clearfix\">
        <!-- msm-bottom region -->
        <div id=\"msm-bottom\" class=\"region region-msm-bottom msm-bottom  grid12-12\">
            <div id=\"block-block-53\" class=\"block block-block first  odd\">
                <div class=\"gutter inner clearfix\">
                    <h2 class=\"title block-title\">MSM™ in the Wild</h2>
                    <div class=\"content clearfix\">
                        <p>Unlike other solutions in the market, MSM™ is helping keep your traffic where it belongs - on your website. Now you can make make video calls securely within your brand.</p>
                    </div>
                </div><!-- /block-inner -->
                <div class=\"row\" id=\"front-msm-slider\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/slider/slick.css\"/>
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/slider/slick-theme.css\"/>
                    <div class=\"front-msm-slider\">
                        <div>
                            <img src=\"img/slider/example1.jpg\" width=\"220\" height=\"185\" />
                        </div>
                        <div>
                            <img src=\"img/slider/example2.jpg\" width=\"220\" height=\"185\" />
                        </div>
                        <div>
                            <img src=\"img/slider/example3.jpg\" width=\"220\" height=\"185\" />
                        </div>
                        <div>
                            <img src=\"img/slider/example4.jpg\" width=\"220\" height=\"185\" />
                        </div>
                        <div>
                            <img src=\"img/slider/example5.jpg\" width=\"220\" height=\"185\" />
                        </div>
                        <div>
                            <img src=\"img/slider/example6.jpg\" width=\"220\" height=\"185\" />
                        </div>
                    </div>
                </div>
            </div><!-- /block -->
        </div>
        <!-- /msm-bottom -->
    </div>
    <div class=\"row\" id=\"front-text-slider\">
        <h2 class=\"slider-title\">What Our Clients Are Saying</h2>
        <div class=\"front-text-slider\">
            <div class=\"text-slider-content\">
                <div class=\"slider-content\">
                    <p>\"MSM's product gave us a whole new way to monetize our site. People will pay to watch our recorded video conference discussions with top medical experts.\"</p>
                </div>
                <div class=\"slider-author\">
                    <p>Lawren Pulse, Wellaroo</p>
                </div>
            </div>
            <div class=\"text-slider-content\">
                <div class=\"slider-content\">
                    <p>I believe that anyone who is looking to to take their brand to the next level, Understands the intimacy of face to face contact and therefore increased trust from your clients, Understands how important it is NOT to lead people away from your website, Wants to increase traffic to your website,this platform is the one for you AND oh by the way... I happen to be an affiliate. This platform sells itself IF you're smart enough to recognize it's worth. I believe in this!</p>
                </div>
                <div class=\"slider-author\">
                    <p>Lisa Scott, Business Coach and Mentor</p>
                </div>
            </div>
            <div class=\"text-slider-content\">
                <div class=\"slider-content\">
                    <p>As an Affiliate I would use MSM with Medical Prospects in order to show them the ease of use with the system, and how it would work for their practice. I would explain that having the ability to engage in Virtual Visits would benefit the Practice as well as the patients. The Medical Community needs to hear about MSM. Of course our Small Business Owners do too!</p>
                </div>
                <div class=\"slider-author\">
                    <p>Robin M. Harris, Virtual Services, LLC</p>
                </div>
            </div>
            <div class=\"text-slider-content\">
                <div class=\"slider-content\">
                    <p>\"MySecureMeeting™ brings my client to me in one click of my computer for communication in a secured platform. I’m face to face with my clients, anywhere, anytime removing the boundaries of location. Validating thru visual communication the important points of our meeting eliminates lost opportunities, saves time, and money. Should I need to review…….the meeting is recorded!\"</p>
                </div>
                <div class=\"slider-author\">
                    <p>Michele D. Giampaolo, MCConnections</p>
                </div>
            </div>
        </div>
    </div>
    <script src=\"js/jquery-1.9.1.min.js\"></script>
    <script src=\"js/jquery-migrate-1.2.1.min.js\"></script>
    <script src=\"js/slider/slick.min.js\"></script>
    <script type=\"text/javascript\">
        var j = jQuery.noConflict();
        j(document).ready(function(){
            j('.front-msm-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1
            });
            
            j('.front-text-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 59,  101 => 58,  50 => 10,  47 => 9,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block slider %}*/
/*     {{include ('slider/video_slider.html.twig')}}*/
/* {% endblock %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {% block main %}*/
/*     <div class='row'>*/
/* 		<div id="content" class="region region-content content nested grid12-12">*/
/* 			<div id="block-block-36" class="block block-block   even">*/
/* 			  <div class="gutter inner clearfix">*/
/* 			            */
/* 			    <div class="content clearfix">*/
/* 			      <p>&nbsp;</p>*/
/* 			<div class="grid12-7 content-image left">*/
/* 			<div style="padding-left:100px"><img src="img/files/apple_btn.png" width="140" height="68" alt="MySecureMeeting™ in the App Store">&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 			<img src="img/files/android_btn.png" width="140" height="68" alt="MySecureMeeting™ on Chrome for Android"></div><br>*/
/* 			</div>*/
/* */
/* 			<div class="grid12-12 right-content left">*/
/* 			<p>&nbsp;</p>*/
/* 			  <h2>Instant, Secure Video Calling</h2>*/
/* 			    <p>Companies are using MySecureMeeting's progressive, live video technology to help create unique and innovative experiences.</p>*/
/* 			    <p>The powerful plug-n-play application offers voice, video, messaging and screen-sharing.  It can be embedded into an individual website or it can be scaled to meet the secure communication needs of a large enterprise.  It is a valuable communications feature making interacting online as easy as clicking the "share" button on Facebook. */
/* 			</p>*/
/* 			<p>&nbsp;</p> */
/* 			    <a class="button" href="/msm-features">See All Features</a> &nbsp; &nbsp; <a class="button" href="/user">Get Started</a>*/
/* 			</div>*/
/* 			<p>&nbsp;</p>    </div>*/
/* 			  </div><!-- /block-inner -->*/
/* 			</div>*/
/* */
/* 			<div id="block-block-60" class="block block-block  last odd">*/
/* 			  <div class="gutter inner clearfix">*/
/* 			            */
/* 			    <div class="content clearfix">*/
/* 			       <p>&nbsp;</p>*/
/* 			<div class="grid12-12 right-content left">*/
/* 			<p>&nbsp;</p>*/
/* 			<h2>Instant, Secure Live Broadcasting</h2>*/
/* 			<ul><li>Easily broadcast high quality video from directly inside a website to hundreds of viewers</li>*/
/* 			<li>No phone access necessary, direct connection</li>*/
/* 			<li>Host live tutorials, webinars, workshops, or group discussions</li>*/
/* 			</ul><p>&nbsp;</p>*/
/* 			<p>    <a class="button" href="/msm-features"></a> &nbsp; &nbsp; <a class="button" href="/user">Purchase APP!</a>*/
/* 			</p></div>*/
/* 			<p>&nbsp;</p>*/
/* 			     </div>*/
/* 			  </div><!-- /block-inner -->*/
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* {% block msm_footer %}*/
/*     <div class="container-msm-bottom-content clearfix">*/
/*         <!-- msm-bottom region -->*/
/*         <div id="msm-bottom" class="region region-msm-bottom msm-bottom  grid12-12">*/
/*             <div id="block-block-53" class="block block-block first  odd">*/
/*                 <div class="gutter inner clearfix">*/
/*                     <h2 class="title block-title">MSM™ in the Wild</h2>*/
/*                     <div class="content clearfix">*/
/*                         <p>Unlike other solutions in the market, MSM™ is helping keep your traffic where it belongs - on your website. Now you can make make video calls securely within your brand.</p>*/
/*                     </div>*/
/*                 </div><!-- /block-inner -->*/
/*                 <div class="row" id="front-msm-slider">*/
/*                     <link rel="stylesheet" type="text/css" href="css/slider/slick.css"/>*/
/*                     <link rel="stylesheet" type="text/css" href="css/slider/slick-theme.css"/>*/
/*                     <div class="front-msm-slider">*/
/*                         <div>*/
/*                             <img src="img/slider/example1.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                         <div>*/
/*                             <img src="img/slider/example2.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                         <div>*/
/*                             <img src="img/slider/example3.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                         <div>*/
/*                             <img src="img/slider/example4.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                         <div>*/
/*                             <img src="img/slider/example5.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                         <div>*/
/*                             <img src="img/slider/example6.jpg" width="220" height="185" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /block -->*/
/*         </div>*/
/*         <!-- /msm-bottom -->*/
/*     </div>*/
/*     <div class="row" id="front-text-slider">*/
/*         <h2 class="slider-title">What Our Clients Are Saying</h2>*/
/*         <div class="front-text-slider">*/
/*             <div class="text-slider-content">*/
/*                 <div class="slider-content">*/
/*                     <p>"MSM's product gave us a whole new way to monetize our site. People will pay to watch our recorded video conference discussions with top medical experts."</p>*/
/*                 </div>*/
/*                 <div class="slider-author">*/
/*                     <p>Lawren Pulse, Wellaroo</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="text-slider-content">*/
/*                 <div class="slider-content">*/
/*                     <p>I believe that anyone who is looking to to take their brand to the next level, Understands the intimacy of face to face contact and therefore increased trust from your clients, Understands how important it is NOT to lead people away from your website, Wants to increase traffic to your website,this platform is the one for you AND oh by the way... I happen to be an affiliate. This platform sells itself IF you're smart enough to recognize it's worth. I believe in this!</p>*/
/*                 </div>*/
/*                 <div class="slider-author">*/
/*                     <p>Lisa Scott, Business Coach and Mentor</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="text-slider-content">*/
/*                 <div class="slider-content">*/
/*                     <p>As an Affiliate I would use MSM with Medical Prospects in order to show them the ease of use with the system, and how it would work for their practice. I would explain that having the ability to engage in Virtual Visits would benefit the Practice as well as the patients. The Medical Community needs to hear about MSM. Of course our Small Business Owners do too!</p>*/
/*                 </div>*/
/*                 <div class="slider-author">*/
/*                     <p>Robin M. Harris, Virtual Services, LLC</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="text-slider-content">*/
/*                 <div class="slider-content">*/
/*                     <p>"MySecureMeeting™ brings my client to me in one click of my computer for communication in a secured platform. I’m face to face with my clients, anywhere, anytime removing the boundaries of location. Validating thru visual communication the important points of our meeting eliminates lost opportunities, saves time, and money. Should I need to review…….the meeting is recorded!"</p>*/
/*                 </div>*/
/*                 <div class="slider-author">*/
/*                     <p>Michele D. Giampaolo, MCConnections</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script src="js/jquery-1.9.1.min.js"></script>*/
/*     <script src="js/jquery-migrate-1.2.1.min.js"></script>*/
/*     <script src="js/slider/slick.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         var j = jQuery.noConflict();*/
/*         j(document).ready(function(){*/
/*             j('.front-msm-slider').slick({*/
/*                 slidesToShow: 4,*/
/*                 slidesToScroll: 1*/
/*             });*/
/*             */
/*             j('.front-text-slider').slick({*/
/*                 slidesToShow: 2,*/
/*                 slidesToScroll: 1*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
