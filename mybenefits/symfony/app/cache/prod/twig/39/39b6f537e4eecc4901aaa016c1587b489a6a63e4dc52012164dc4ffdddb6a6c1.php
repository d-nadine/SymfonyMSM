<?php

/* slider/video_slider.html.twig */
class __TwigTemplate_d39fef478546646242ed9d1d6534442f5af724f9e5aa37e5cb236e8369022a1c extends Twig_Template
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
        echo "<section id=\"home\">
<div class=\"header-video forcefullwidth_wrapper_tp_banner\">
\t<img 
\t     class=\"header-video__media\"
\t     data-video-URL=\"\"
\t     data-teaser=\"img/video/msm_video\"
\t     data-mobiteaser=\"img/vid-placeholder.jpg\"
\t     data-video-width=\"560\"
\t     data-video-height=\"315\">
</div>
<span class=\"arrow-down\"><a href=\"#block-block-36\">scroll down</a></span>
</section>
<script src=\"js/jquery-1.9.1.min.js\"></script>
<script src=\"js/modernizr.js\"></script>
<script src=\"js/header-video.script.js\"></script>
<script>
jQuery(document).ready(function (){
    jQuery('.header-video').each(function(i, elem) {
        headerVideo = new HeaderVideo({
          element: elem,
          media: '.header-video__media',
        });
    });
    jQuery('video').on('ended', function() {
    \tthis.load();
    \tthis.play();
    });
    jQuery(\".arrow-down a\").on(\"click\", function(e) {
        e.preventDefault();
        var t = this.hash,
            i = jQuery(t);
        if (i) var s = i.offset().top;
        jQuery(this).parent(\".arrow-down\").length && jQuery(\"html, body\").stop().animate({
            scrollTop: s
        }, 900)
    })
    
});

</script>
";
    }

    public function getTemplateName()
    {
        return "slider/video_slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <section id="home">*/
/* <div class="header-video forcefullwidth_wrapper_tp_banner">*/
/* 	<img */
/* 	     class="header-video__media"*/
/* 	     data-video-URL=""*/
/* 	     data-teaser="img/video/msm_video"*/
/* 	     data-mobiteaser="img/vid-placeholder.jpg"*/
/* 	     data-video-width="560"*/
/* 	     data-video-height="315">*/
/* </div>*/
/* <span class="arrow-down"><a href="#block-block-36">scroll down</a></span>*/
/* </section>*/
/* <script src="js/jquery-1.9.1.min.js"></script>*/
/* <script src="js/modernizr.js"></script>*/
/* <script src="js/header-video.script.js"></script>*/
/* <script>*/
/* jQuery(document).ready(function (){*/
/*     jQuery('.header-video').each(function(i, elem) {*/
/*         headerVideo = new HeaderVideo({*/
/*           element: elem,*/
/*           media: '.header-video__media',*/
/*         });*/
/*     });*/
/*     jQuery('video').on('ended', function() {*/
/*     	this.load();*/
/*     	this.play();*/
/*     });*/
/*     jQuery(".arrow-down a").on("click", function(e) {*/
/*         e.preventDefault();*/
/*         var t = this.hash,*/
/*             i = jQuery(t);*/
/*         if (i) var s = i.offset().top;*/
/*         jQuery(this).parent(".arrow-down").length && jQuery("html, body").stop().animate({*/
/*             scrollTop: s*/
/*         }, 900)*/
/*     })*/
/*     */
/* });*/
/* */
/* </script>*/
/* */
