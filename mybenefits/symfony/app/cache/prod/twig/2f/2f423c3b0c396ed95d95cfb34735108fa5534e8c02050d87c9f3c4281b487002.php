<?php

/* pricing/pricing.html.twig */
class __TwigTemplate_95b40e6361027357fee80479d1d7b1744cfd0a0c37e3636ac5f2d5737dc139d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pricing/pricing.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'download_one_sheet' => array($this, 'block_download_one_sheet'),
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
        echo "pricing";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "        <div class=\"price-table row\">
            <div class=\"header-content row\">
                <h2>Instant, Secure Video Calling</h2>
                <p>Affordable pricing options that scale with your business</p>
            </div>
            <div class=\"row\">
                <div class=\"price-item item-1 col-md-4 col-sm-12\">
                    <h2>Solo Preneuer/Entrepreneur</h2>
                    <div class=\"p-content\">
                        <div class=\"price\">\$99<span>/ month</span></div>
                        <a href=\"#checkout-section\" class=\"btn button pricing-opt\" data-value=\"99\" data-type=\"plan\" data-id=\"p99\" data-title=\"Solo Preneuer/Entrepreneur\">Select Plan</a>
                        <div class=\"features\">
                            <p>5K Minutes</p>
                            <p>50GB Secure Storage</p>
                            <p>Secure Hosting</p>
                            <p>Between 24-48 Hours Email Support<br>Response Time</p>
                            <p>1-10 Connections</p>
                            <p>Archiving</p>
                            <p>Branding</p>
                            <p><a href=\"\">See All Features...</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"price-item item-2 col-md-4 col-sm-12\">
                    <h2>Small Business</h2>
                    <div class=\"p-content\">
                        <div class=\"price\">\$179<span>/ month</span></div>
                        <a href=\"#checkout-section\" class=\"btn button pricing-opt\" data-value=\"179\" data-type=\"plan\" data-id=\"p179\" data-title=\"Small Business\">Select Plan</a>
                        <div class=\"features\">
                            <p>12.5K Minutes</p>
                            <p>100GB Secure Storage</p>
                            <p>Secure Hosting</p>
                            <p>Within 24 Hours Email Support<br>Response Time</p>
                            <p>1-10 Connections</p>
                            <p>Archiving</p>
                            <p>Branding</p>
                            <p><a href=\"\">See All Features...</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"price-item item-3 col-md-4 col-sm-12\">
                    <h2>Enterprise</h2>
                    <div class=\"p-content\">
                        <div class=\"price\">\$449<span>/ month</span></div>
                        <a href=\"#checkout-section\" class=\"btn button pricing-opt\" data-value=\"449\" data-type=\"plan\" data-id=\"p449\" data-title=\"Enterprise\">Select Plan</a>
                        <div class=\"features\">
                            <p>30K Minutes</p>
                            <p>250GB Secure Storage</p>
                            <p>Secure Hosting</p>
                            <p>4-6 Hour Email Support<br>Response Time</p>
                            <p>1-20 Connections</p>
                            <p>Archiving</p>
                            <p>Branding</p>
                            <p><a href=\"\">See All Features...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"checkout-section\" class=\"pricing-table row\">
            <div class=\"header-content row\">
                <h2>You’re almost there!</h2>
                <p>Choose additional features and view your pricing summary.</p>
            </div>
            <div class=\"pricing-listing row\">
                <div class=\"pricing-item item-1 col-md-7 col-sm-12 pull-left\">
                    <h2>Choose your Add-Ons (Optional)</h2>
                    <div class=\"p-content\">
                        <div class=\"p-content-item\">
                            <span><input type=\"checkbox\" class=\"pricing-opt\" data-title=\"Consulting\" data-value=\"75\" data-type=\"addon\" data-id=\"ac\"></span><h3>Consulting</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>
                        </div>
                        <div class=\"p-content-item\">
                            <span><input type=\"checkbox\" class=\"pricing-opt\" data-title=\"Training\" data-value=\"100\" data-type=\"addon\" data-id=\"at\"></span><h3>Training</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>
                        </div>
                        <div class=\"p-content-item\">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><h3>Additional Monthly Minutes</h3>
                            <p><input type=\"checkbox\" name=\"opt_monthly\" id=\"opt_monthly1\" data-title=\"Additional Monthly Minutes\" class=\"pricing-opt\" data-value=\"49\" data-type=\"addon\" data-id=\"am1\"> \$49/5K</p>
                            <p><input type=\"checkbox\" name=\"opt_monthly\" id=\"opt_monthly2\" data-title=\"Additional Monthly Minutes\" class=\"pricing-opt\" data-value=\"99\" data-type=\"addon\" data-id=\"am2\"> \$99/10K</p>
                            <p><input type=\"checkbox\" name=\"opt_monthly\" id=\"opt_monthly3\" data-title=\"Additional Monthly Minutes\" class=\"pricing-opt\" data-value=\"179\" data-type=\"addon\" data-id=\"am3\"> \$179/20K</p>
                        </div>
                        <div class=\"p-content-item\">
                            <span><input type=\"checkbox\" class=\"pricing-opt\" data-title=\"Additional Support\" data-value=\"150\" data-type=\"addon\" data-id=\"as\"></span><h3>Additional Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>
                        </div>
                    </div>
                </div>
                <div class=\"pricing-item item-2 col-md-4 col-sm-12 pull-right\">
                    <h2>Pricing Summary</h2>
                    <div class=\"p-content\">
                        <div class=\"list_select_plan\">
                            <h3 class=\"\">
                                Selected Plan <span id=\"total_select_plan\" data=\"125\" data-nid=\"759\">\$0/mo</span>
                            </h3>
                        </div>
                        <div class=\"list_select_add-ons\">
                            <h3 class=\"\">
                                Selected Add-Ons <span id=\"total_select_add_ons\">\$0</span>
                            </h3>
                        </div>
                        <div class=\"total total_per_month\">
                            Total Per Month <span>\$470/mo</span>
                        </div>
                    </div>
                    <div class=\"installation\">
                        <h4>
                            <input type=\"checkbox\" name=\"check_installation\" id=\"check_installation\" 
                                   class=\"pricing-opt\" data-value=\"199\" data-type=\"addon\" data-id=\"ai\"> Installation
                        </h4>
                        <p>one-time fee</p>
                        <span id=\"installation\" data=\"\">\$199</span>
                    </div>
                    <div class=\"total-price\">
                        <h2 class=\"total-price-caption\">Total Price</h2>
                        <span class=\"price\" id=\"total_price\" data=\"\">\$0</span>
                        <a href=\"#\" id=\"btn_checkout\" class=\"btn\">Check Out</a>
                        <hr>
                        <h2>Questions? Give us a call.</h2>
                        <span class=\"phone_number\">000.000.0000</span>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"js/jquery-1.9.1.min.js\"></script>
        <script src=\"js/pricing.js\"></script>
    ";
    }

    // line 135
    public function block_download_one_sheet($context, array $blocks = array())
    {
        // line 136
        echo "        <div id=\"download-one-sheet\" class='row'>
            <p>&nbsp;</p>
            <h2>
                You've spent a lot of money and time creating and building your brand. MySecureMeeting™ is the tool to help you brag about it!
                <br>
                <br>
                <div align='center'><a class=\"button\" href=\"#\">Download One Sheet</a></div>
            </h2>
            <p>&nbsp;</p>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "pricing/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 136,  170 => 135,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'pricing' %}*/
/* */
/*     {% block main %}*/
/*         <div class="price-table row">*/
/*             <div class="header-content row">*/
/*                 <h2>Instant, Secure Video Calling</h2>*/
/*                 <p>Affordable pricing options that scale with your business</p>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="price-item item-1 col-md-4 col-sm-12">*/
/*                     <h2>Solo Preneuer/Entrepreneur</h2>*/
/*                     <div class="p-content">*/
/*                         <div class="price">$99<span>/ month</span></div>*/
/*                         <a href="#checkout-section" class="btn button pricing-opt" data-value="99" data-type="plan" data-id="p99" data-title="Solo Preneuer/Entrepreneur">Select Plan</a>*/
/*                         <div class="features">*/
/*                             <p>5K Minutes</p>*/
/*                             <p>50GB Secure Storage</p>*/
/*                             <p>Secure Hosting</p>*/
/*                             <p>Between 24-48 Hours Email Support<br>Response Time</p>*/
/*                             <p>1-10 Connections</p>*/
/*                             <p>Archiving</p>*/
/*                             <p>Branding</p>*/
/*                             <p><a href="">See All Features...</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="price-item item-2 col-md-4 col-sm-12">*/
/*                     <h2>Small Business</h2>*/
/*                     <div class="p-content">*/
/*                         <div class="price">$179<span>/ month</span></div>*/
/*                         <a href="#checkout-section" class="btn button pricing-opt" data-value="179" data-type="plan" data-id="p179" data-title="Small Business">Select Plan</a>*/
/*                         <div class="features">*/
/*                             <p>12.5K Minutes</p>*/
/*                             <p>100GB Secure Storage</p>*/
/*                             <p>Secure Hosting</p>*/
/*                             <p>Within 24 Hours Email Support<br>Response Time</p>*/
/*                             <p>1-10 Connections</p>*/
/*                             <p>Archiving</p>*/
/*                             <p>Branding</p>*/
/*                             <p><a href="">See All Features...</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="price-item item-3 col-md-4 col-sm-12">*/
/*                     <h2>Enterprise</h2>*/
/*                     <div class="p-content">*/
/*                         <div class="price">$449<span>/ month</span></div>*/
/*                         <a href="#checkout-section" class="btn button pricing-opt" data-value="449" data-type="plan" data-id="p449" data-title="Enterprise">Select Plan</a>*/
/*                         <div class="features">*/
/*                             <p>30K Minutes</p>*/
/*                             <p>250GB Secure Storage</p>*/
/*                             <p>Secure Hosting</p>*/
/*                             <p>4-6 Hour Email Support<br>Response Time</p>*/
/*                             <p>1-20 Connections</p>*/
/*                             <p>Archiving</p>*/
/*                             <p>Branding</p>*/
/*                             <p><a href="">See All Features...</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="checkout-section" class="pricing-table row">*/
/*             <div class="header-content row">*/
/*                 <h2>You’re almost there!</h2>*/
/*                 <p>Choose additional features and view your pricing summary.</p>*/
/*             </div>*/
/*             <div class="pricing-listing row">*/
/*                 <div class="pricing-item item-1 col-md-7 col-sm-12 pull-left">*/
/*                     <h2>Choose your Add-Ons (Optional)</h2>*/
/*                     <div class="p-content">*/
/*                         <div class="p-content-item">*/
/*                             <span><input type="checkbox" class="pricing-opt" data-title="Consulting" data-value="75" data-type="addon" data-id="ac"></span><h3>Consulting</h3>*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>*/
/*                         </div>*/
/*                         <div class="p-content-item">*/
/*                             <span><input type="checkbox" class="pricing-opt" data-title="Training" data-value="100" data-type="addon" data-id="at"></span><h3>Training</h3>*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>*/
/*                         </div>*/
/*                         <div class="p-content-item">*/
/*                             <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><h3>Additional Monthly Minutes</h3>*/
/*                             <p><input type="checkbox" name="opt_monthly" id="opt_monthly1" data-title="Additional Monthly Minutes" class="pricing-opt" data-value="49" data-type="addon" data-id="am1"> $49/5K</p>*/
/*                             <p><input type="checkbox" name="opt_monthly" id="opt_monthly2" data-title="Additional Monthly Minutes" class="pricing-opt" data-value="99" data-type="addon" data-id="am2"> $99/10K</p>*/
/*                             <p><input type="checkbox" name="opt_monthly" id="opt_monthly3" data-title="Additional Monthly Minutes" class="pricing-opt" data-value="179" data-type="addon" data-id="am3"> $179/20K</p>*/
/*                         </div>*/
/*                         <div class="p-content-item">*/
/*                             <span><input type="checkbox" class="pricing-opt" data-title="Additional Support" data-value="150" data-type="addon" data-id="as"></span><h3>Additional Support</h3>*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus erat a erat tristique consequat. Curabitur molestie eget metus nec feugiat. Nullam iaculis varius fermentum.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="pricing-item item-2 col-md-4 col-sm-12 pull-right">*/
/*                     <h2>Pricing Summary</h2>*/
/*                     <div class="p-content">*/
/*                         <div class="list_select_plan">*/
/*                             <h3 class="">*/
/*                                 Selected Plan <span id="total_select_plan" data="125" data-nid="759">$0/mo</span>*/
/*                             </h3>*/
/*                         </div>*/
/*                         <div class="list_select_add-ons">*/
/*                             <h3 class="">*/
/*                                 Selected Add-Ons <span id="total_select_add_ons">$0</span>*/
/*                             </h3>*/
/*                         </div>*/
/*                         <div class="total total_per_month">*/
/*                             Total Per Month <span>$470/mo</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="installation">*/
/*                         <h4>*/
/*                             <input type="checkbox" name="check_installation" id="check_installation" */
/*                                    class="pricing-opt" data-value="199" data-type="addon" data-id="ai"> Installation*/
/*                         </h4>*/
/*                         <p>one-time fee</p>*/
/*                         <span id="installation" data="">$199</span>*/
/*                     </div>*/
/*                     <div class="total-price">*/
/*                         <h2 class="total-price-caption">Total Price</h2>*/
/*                         <span class="price" id="total_price" data="">$0</span>*/
/*                         <a href="#" id="btn_checkout" class="btn">Check Out</a>*/
/*                         <hr>*/
/*                         <h2>Questions? Give us a call.</h2>*/
/*                         <span class="phone_number">000.000.0000</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <script src="js/jquery-1.9.1.min.js"></script>*/
/*         <script src="js/pricing.js"></script>*/
/*     {% endblock %}*/
/*     */
/*     {% block download_one_sheet %}*/
/*         <div id="download-one-sheet" class='row'>*/
/*             <p>&nbsp;</p>*/
/*             <h2>*/
/*                 You've spent a lot of money and time creating and building your brand. MySecureMeeting™ is the tool to help you brag about it!*/
/*                 <br>*/
/*                 <br>*/
/*                 <div align='center'><a class="button" href="#">Download One Sheet</a></div>*/
/*             </h2>*/
/*             <p>&nbsp;</p>*/
/*         </div>*/
/*     {% endblock %}*/
