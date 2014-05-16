<?php

/* subtemplates/article.twig */
class __TwigTemplate_fc1d0ff7cf9ae2fd6e17ec3de0ecc6173bd34462f0f78a93ee249bd0f70e5b9a extends Twig_Template
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
        echo "<div class=\"container visible-lg visible-md\">

    <div class=\"col-md-6 prev\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prevnext"]) ? $context["prevnext"] : null), "prev"), "link"), "html", null, true);
        echo "\">
        <span class=\"pull-left\">
        <img src=\"/assets/arrow-prev.png\"></span>
            <div class=\"titles\">
                <b>PREVIOUS ARTICLE</b><br>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prevnext"]) ? $context["prevnext"] : null), "prev"), "title"), "html", null, true);
        echo "
            </div>
        </a></div>

    <div class=\"col-md-6 next\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prevnext"]) ? $context["prevnext"] : null), "next"), "link"), "html", null, true);
        echo "\">
            <div class=\"pull-left titles\">
                <b>NEXT ARTICLE</b><br>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prevnext"]) ? $context["prevnext"] : null), "next"), "title"), "html", null, true);
        echo "
            </div>
            <div class=\"pull-right\"><img src=\"/assets/arrow-next.png\"></div>
        </a></div>

</div>

<hr class=\"visible-lg visible-md\">

<div class=\"container\">
    <div class=\"col-xs-12\">
        <div>

            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxonomy_links"]) ? $context["taxonomy_links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
            // line 29
            echo "
                <a class=\"tax\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : null), "term"), "html", null, true);
            echo "</a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        </div>
    </div>
    <div class=\"col-xs-12\">
        <div><h1><h1>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1></h1></div>
    </div>
</div>

<hr class=\"visible-lg visible-md\">

<div class=\"container\">

    <div class=\"col-sm-1 visible-lg visible-md\">
        <img src=\"/assets/social-left-column.png\">
    </div>

    <div class=\"col-sm-12 col-md-6\">

        <div>
            <img class=\"img-responsive\" width=\"635\" src=\"http://www.hollywoodreporter.com/";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
        echo "\" />
            ";
        // line 53
        echo (isset($context["caption"]) ? $context["caption"] : null);
        echo "
        </div>

        <div><h3>";
        // line 56
        echo (isset($context["deck"]) ? $context["deck"] : null);
        echo "</h3></div>

        <div><p>";
        // line 58
        echo (isset($context["byline"]) ? $context["byline"] : null);
        echo "</p></div>

        <div>";
        // line 60
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "</div>

        ";
        // line 62
        if ((isset($context["related_photo_galleries"]) ? $context["related_photo_galleries"] : null)) {
            // line 63
            echo "
        <div id=\"related-photo-galleries\">

            ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related_photo_galleries"]) ? $context["related_photo_galleries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 67
                echo "
            <div class=\"gallery \">

                <h2 class=\"thr-subtitle thr-subtitle-left\">
                    <em>Photo <span>Gallery</span>  </em>
                </h2>
                <div class=\"links \">
                    <a class=\"call-to-action call-to-action-gallery\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "link"), "html", null, true);
                echo "\">View Gallery</a>
                    <a class=\"main-link\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"), "html", null, true);
                echo "</a>
                </div>

                <div class=\"images clearfix\">

                    <div class=\"inner\">

                    ";
                // line 82
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 83
                    echo "

                        <a class=\"img-holder \" href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "link"), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "src"), "html", null, true);
                    echo "\" class=\"imagecache imagecache-related_photogallery_182_height\"/>                                                                                            </a>

                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "
                    </div><!-- close .inner -->

                </div><!-- close .images -->
            </div><!-- close .gallery -->

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
        </div><!-- close #related-photo-galleries -->

        ";
        }
        // line 100
        echo "


        ";
        // line 104
        echo "        <div id=\"grv-personalization-13\"></div>
        <script type=\"text/javascript\">
        //<![CDATA[
        (function(){
            window.gravityInsightsParams = {
                \"type\": \"content\",
                \"action\": \"\",
                \"site_guid\": \"01b0b9ad501e0c849a822e6124ff0fc2\"
            };
            var adServerReq,bUrl,doUseGravityUserGuid,includeJs,jq,type,ug,wlPrefix,wlUrl,_ref,_ref1,_ref2;includeJs=function(a){var b;b=document.createElement(\"script\");b.async=!0;b.src=a;a=document.getElementsByTagName(\"script\")[0];return a.parentNode.insertBefore(b,a)};bUrl=\"\";ug=(doUseGravityUserGuid=!0===gravityInsightsParams.useGravityUserGuid?1:0)?\"\":gravityInsightsParams.user_guid||(null!=(_ref=/grvinsights=([^;]+)/.exec(document.cookie))?_ref[1]:void 0)||\"\";
            wlUrl=(wlPrefix=\"http://rma-api.gravity.com/v1/api/intelligence\",jq=(null!=(_ref1=window.jQuery)?null!=(_ref2=_ref1.fn)?_ref2.jquery:void 0:void 0)||\"\",type=\"iframe\",adServerReq=gravityInsightsParams.ad||\"\",\"\"+wlPrefix+\"/wl?jq=\"+jq+\"&sg=\"+gravityInsightsParams.site_guid+\"&ug=\"+ug+\"&ugug=\"+doUseGravityUserGuid+\"&id=grv-personalization-13&pl=13\"+(\"&type=\"+type+\"&ad=\"+adServerReq+\"&x=\"+(new Date).getTime())+(\"undefined\"!==typeof forceArticleIds&&null!==forceArticleIds&&forceArticleIds.join?\"&ai=\"+forceArticleIds.join(\",\"):
                    \"\")+(\"undefined\"!==typeof apids&&null!==apids&&\"\"!==apids?\"&apids=\"+encodeURIComponent(apids):\"\"));bUrl&&includeJs(bUrl);wlUrl&&(window.gravityInsightsParams.sidebar&&(window.gravityInsightsParams.wlStartTime=(new Date).getTime()),includeJs(wlUrl));})();
        //]]>
    </script>
        ";
        // line 119
        echo "
        ";
        // line 121
        echo "        <div id=\"grv-personalization-27\"></div>
    <script type='text/javascript'>
        //<![CDATA[
        (function(){
            window.gravityInsightsParams = {
                'type': 'content',
                'action': '',
                'site_guid': '01b0b9ad501e0c849a822e6124ff0fc2'
            };
            var adServerReq,bUrl,doUseGravityUserGuid,includeJs,jq,type,ug,wlPrefix,wlUrl,_ref,_ref1,_ref2;includeJs=function(a){var b;b=document.createElement(\"script\");b.async=!0;b.src=a;a=document.getElementsByTagName(\"script\")[0];return a.parentNode.insertBefore(b,a)};bUrl=\"\";ug=(doUseGravityUserGuid=!0===gravityInsightsParams.useGravityUserGuid?1:0)?\"\":gravityInsightsParams.user_guid||(null!=(_ref=/grvinsights=([^;]+)/.exec(document.cookie))?_ref[1]:void 0)||\"\";
            wlUrl=(wlPrefix=\"http://rma-api.gravity.com/v1/api/intelligence\",jq=(null!=(_ref1=window.jQuery)?null!=(_ref2=_ref1.fn)?_ref2.jquery:void 0:void 0)||\"\",type=\"iframe\",adServerReq=gravityInsightsParams.ad||\"\",\"\"+wlPrefix+\"/wl?jq=\"+jq+\"&sg=\"+gravityInsightsParams.site_guid+\"&ug=\"+ug+\"&ugug=\"+doUseGravityUserGuid+\"&id=grv-personalization-27&pl=27\"+(\"&type=\"+type+\"&ad=\"+adServerReq+\"&x=\"+(new Date).getTime())+(\"undefined\"!==typeof forceArticleIds&&null!==forceArticleIds&&forceArticleIds.join?\"&ai=\"+forceArticleIds.join(\",\"):
                    \"\")+(\"undefined\"!==typeof apids&&null!==apids&&\"\"!==apids?\"&apids=\"+encodeURIComponent(apids):\"\"));bUrl&&includeJs(bUrl);wlUrl&&(window.gravityInsightsParams.sidebar&&(window.gravityInsightsParams.wlStartTime=(new Date).getTime()),includeJs(wlUrl));})();
        //]]>
    </script>
        ";
        // line 136
        echo "
</div>

    <div class=\"col-sm-4 visible-lg visible-md pull-right\">

        <div>
            <img src=\"/assets/placeholder-ad.png\">
        </div>

            <div class=\"recommended_articles\">

        ";
        // line 147
        if ((isset($context["associated_articles"]) ? $context["associated_articles"] : null)) {
            // line 148
            echo "
                <div class=\"ra-header\">Featured:</div>

            ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["associated_articles"]) ? $context["associated_articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 152
                echo "
                <div class=\"module_wrap\">
                    <div class=\"media\">
                        <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "link"), "html", null, true);
                echo "\">
                            <img src='";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "filepath"), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "title"), "html", null, true);
                echo "' />
                        </a>
                    </div>
                    <div class=\"text\">
                        <div class=\"outer\">
                            <div class=\"inner\">
                                <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "title"), "html", null, true);
                echo "
                                    <img class=\"redarr\" src=\"http://www.hollywoodreporter.com/sites/all/themes/thr/images/elements/icon_red_darrow.png\" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "
        ";
        } else {
            // line 173
            echo "
            ";
            // line 175
            echo "            <div id=\"grv-personalization-18\"></div>
            <script type=\"text/javascript\">
                //<![CDATA[
                (function(){
                    window.gravityInsightsParams = {
                        \"type\": \"content\",
                        \"action\": \"\",
                        \"site_guid\": \"01b0b9ad501e0c849a822e6124ff0fc2\"
                    };
                    var adServerReq,bUrl,doUseGravityUserGuid,includeJs,jq,type,ug,wlPrefix,wlUrl,_ref,_ref1,_ref2;includeJs=function(a){var b;b=document.createElement(\"script\");b.async=!0;b.src=a;a=document.getElementsByTagName(\"script\")[0];return a.parentNode.insertBefore(b,a)};bUrl=\"\";ug=(doUseGravityUserGuid=!0===gravityInsightsParams.useGravityUserGuid?1:0)?\"\":gravityInsightsParams.user_guid||(null!=(_ref=/grvinsights=([^;]+)/.exec(document.cookie))?_ref[1]:void 0)||\"\";
                    wlUrl=(wlPrefix=\"http://rma-api.gravity.com/v1/api/intelligence\",jq=(null!=(_ref1=window.jQuery)?null!=(_ref2=_ref1.fn)?_ref2.jquery:void 0:void 0)||\"\",type=\"iframe\",adServerReq=gravityInsightsParams.ad||\"\",\"\"+wlPrefix+\"/wl?jq=\"+jq+\"&sg=\"+gravityInsightsParams.site_guid+\"&ug=\"+ug+\"&ugug=\"+doUseGravityUserGuid+\"&id=grv-personalization-18&pl=18\"+(\"&type=\"+type+\"&ad=\"+adServerReq+\"&x=\"+(new Date).getTime())+(\"undefined\"!==typeof forceArticleIds&&null!==forceArticleIds&&forceArticleIds.join?\"&ai=\"+forceArticleIds.join(\",\"):
                            \"\")+(\"undefined\"!==typeof apids&&null!==apids&&\"\"!==apids?\"&apids=\"+encodeURIComponent(apids):\"\"));bUrl&&includeJs(bUrl);wlUrl&&(window.gravityInsightsParams.sidebar&&(window.gravityInsightsParams.wlStartTime=(new Date).getTime()),includeJs(wlUrl));})();
                //]]>
            </script>
            ";
            // line 190
            echo "
        ";
        }
        // line 192
        echo "
            </div>

        ";
        // line 196
        echo "        <div id=\"grv-personalization-23\"></div>
        <script type=\"text/javascript\">
            //<![CDATA[
            (function(){
                window.gravityInsightsParams = {
                    \"type\": \"content\",
                    \"action\": \"\",
                    \"site_guid\": \"01b0b9ad501e0c849a822e6124ff0fc2\"
                };
                var adServerReq,bUrl,doUseGravityUserGuid,includeJs,jq,type,ug,wlPrefix,wlUrl,_ref,_ref1,_ref2;includeJs=function(a){var b;b=document.createElement(\"script\");b.async=!0;b.src=a;a=document.getElementsByTagName(\"script\")[0];return a.parentNode.insertBefore(b,a)};bUrl=\"\";ug=(doUseGravityUserGuid=!0===gravityInsightsParams.useGravityUserGuid?1:0)?\"\":gravityInsightsParams.user_guid||(null!=(_ref=/grvinsights=([^;]+)/.exec(document.cookie))?_ref[1]:void 0)||\"\";
                wlUrl=(wlPrefix=\"http://rma-api.gravity.com/v1/api/intelligence\",jq=(null!=(_ref1=window.jQuery)?null!=(_ref2=_ref1.fn)?_ref2.jquery:void 0:void 0)||\"\",type=\"iframe\",adServerReq=gravityInsightsParams.ad||\"\",\"\"+wlPrefix+\"/wl?jq=\"+jq+\"&sg=\"+gravityInsightsParams.site_guid+\"&ug=\"+ug+\"&ugug=\"+doUseGravityUserGuid+\"&id=grv-personalization-23&pl=23\"+(\"&type=\"+type+\"&ad=\"+adServerReq+\"&x=\"+(new Date).getTime())+(\"undefined\"!==typeof forceArticleIds&&null!==forceArticleIds&&forceArticleIds.join?\"&ai=\"+forceArticleIds.join(\",\"):
                        \"\")+(\"undefined\"!==typeof apids&&null!==apids&&\"\"!==apids?\"&apids=\"+encodeURIComponent(apids):\"\"));bUrl&&includeJs(bUrl);wlUrl&&(window.gravityInsightsParams.sidebar&&(window.gravityInsightsParams.wlStartTime=(new Date).getTime()),includeJs(wlUrl));})();
            //]]>
        </script>
        ";
        // line 211
        echo "
        ";
        // line 213
        echo "        <div id=\"grv-personalization-19\"></div>
        <script type=\"text/javascript\">
            //<![CDATA[
            (function(){
                window.gravityInsightsParams = {
                    \"type\": \"content\",
                    \"action\": \"\",
                    \"site_guid\": \"01b0b9ad501e0c849a822e6124ff0fc2\"
                };
                var adServerReq,bUrl,doUseGravityUserGuid,includeJs,jq,type,ug,wlPrefix,wlUrl,_ref,_ref1,_ref2;includeJs=function(a){var b;b=document.createElement(\"script\");b.async=!0;b.src=a;a=document.getElementsByTagName(\"script\")[0];return a.parentNode.insertBefore(b,a)};bUrl=\"\";ug=(doUseGravityUserGuid=!0===gravityInsightsParams.useGravityUserGuid?1:0)?\"\":gravityInsightsParams.user_guid||(null!=(_ref=/grvinsights=([^;]+)/.exec(document.cookie))?_ref[1]:void 0)||\"\";
                wlUrl=(wlPrefix=\"http://rma-api.gravity.com/v1/api/intelligence\",jq=(null!=(_ref1=window.jQuery)?null!=(_ref2=_ref1.fn)?_ref2.jquery:void 0:void 0)||\"\",type=\"iframe\",adServerReq=gravityInsightsParams.ad||\"\",\"\"+wlPrefix+\"/wl?jq=\"+jq+\"&sg=\"+gravityInsightsParams.site_guid+\"&ug=\"+ug+\"&ugug=\"+doUseGravityUserGuid+\"&id=grv-personalization-19&pl=19\"+(\"&type=\"+type+\"&ad=\"+adServerReq+\"&x=\"+(new Date).getTime())+(\"undefined\"!==typeof forceArticleIds&&null!==forceArticleIds&&forceArticleIds.join?\"&ai=\"+forceArticleIds.join(\",\"):
                        \"\")+(\"undefined\"!==typeof apids&&null!==apids&&\"\"!==apids?\"&apids=\"+encodeURIComponent(apids):\"\"));bUrl&&includeJs(bUrl);wlUrl&&(window.gravityInsightsParams.sidebar&&(window.gravityInsightsParams.wlStartTime=(new Date).getTime()),includeJs(wlUrl));})();
            //]]>
        </script>
        ";
        // line 228
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "subtemplates/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 228,  354 => 213,  351 => 211,  335 => 196,  330 => 192,  326 => 190,  310 => 175,  307 => 173,  303 => 171,  286 => 162,  275 => 156,  271 => 155,  266 => 152,  262 => 151,  257 => 148,  255 => 147,  242 => 136,  226 => 121,  223 => 119,  207 => 104,  202 => 100,  196 => 96,  184 => 89,  175 => 86,  171 => 85,  167 => 83,  163 => 82,  151 => 75,  147 => 74,  138 => 67,  134 => 66,  129 => 63,  127 => 62,  122 => 60,  117 => 58,  112 => 56,  106 => 53,  102 => 52,  84 => 37,  78 => 33,  67 => 30,  64 => 29,  60 => 28,  44 => 15,  39 => 13,  31 => 8,  24 => 4,  19 => 1,);
    }
}
