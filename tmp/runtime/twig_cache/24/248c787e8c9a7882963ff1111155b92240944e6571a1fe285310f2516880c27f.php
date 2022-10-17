<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4d0a2e07356364e4815fadc3a28a0bdc94fe87c12d87829b48fab32de3ec14ac */
class __TwigTemplate_3f82aadd43a8cad05b35fa4cc87c276d0ccbd7ff953710931d7ef70887a20f89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pjaxbegin' => [$this, 'block_pjaxbegin'],
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'progress' => [$this, 'block_progress'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'pjaxend' => [$this, 'block_pjaxend'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "    ";
        // line 69
        echo "
    <!DOCTYPE html>
    <html lang=\"";
        // line 71
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "html", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "html", []));
        echo ">
        ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 78
        echo "        <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "body", []));
        echo " font-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "font", []));
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", []));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "brandlogo", []) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "body", []));
        echo " >

            ";
        // line 81
        echo "            ";
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "emcache", [])) {
            // line 82
            echo "                <span style=\"display: none;\" id=\"__emcache_debug\" value=\"on\"></span>
            ";
        } else {
            // line 84
            echo "                <span style=\"display: none;\" id=\"__emcache_debug\" value=\"off\"></span>
            ";
        }
        // line 86
        echo "
            ";
        // line 88
        echo "            ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 92
        echo "       

            ";
        // line 95
        echo "            <article>
                
                <div id=\"";
        // line 97
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "dynamicreload", []));
        echo "\">
                ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "                </div>

            </article>
            ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 139
        echo "            ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 143
        echo "   

            ";
        // line 145
        $this->displayBlock('themescripts', $context, $blocks);
        // line 150
        echo "            
        </body>
    </html>
";
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        // line 73
        echo "        ";
        // line 74
        echo "        <p>Helloooooooo</p>
        ";
        // line 75
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "
        <
        ";
    }

    // line 88
    public function block_pjaxbegin($context, array $blocks = [])
    {
        // line 89
        echo "                <div id=\"beginScripts\" class=\"script-container\">
                    <###begin###>
                </div>
            ";
    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        // line 99
        echo "                

                    ";
        // line 102
        echo "                    ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 105
        echo "
                    ";
        // line 107
        echo "                    ";
        $this->displayBlock('progress', $context, $blocks);
        // line 110
        echo "
                    <!-- Outer Frame Container -->
                    ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "
                    ";
        // line 122
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        echo "

                    ";
        // line 125
        echo "                    ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
                    if(window.basicThemeScripts === undefined){ 
                        window.basicThemeScripts = new ThemeScripts(); 
                    } 
                    basicThemeScripts.initGlobal(); 
                    ", "POS_END");
        // line 130
        echo "

                ";
    }

    // line 102
    public function block_nav_bar($context, array $blocks = [])
    {
        // line 103
        echo "                        ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                    ";
    }

    // line 107
    public function block_progress($context, array $blocks = [])
    {
        // line 108
        echo "                        ";
        echo twig_include($this->env, $context, "./subviews/header/progress_bar.twig");
        echo "
                    ";
    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        // line 113
        echo "                        ";
        // line 117
        echo "                        ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", []))) . ".twig");
        // line 118
        echo "                        ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__4d0a2e07356364e4815fadc3a28a0bdc94fe87c12d87829b48fab32de3ec14ac", 118)->display(twig_array_merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 119
        echo "                    ";
    }

    // line 136
    public function block_footer($context, array $blocks = [])
    {
        // line 137
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
            ";
    }

    // line 139
    public function block_pjaxend($context, array $blocks = [])
    {
        // line 140
        echo "                <div id=\"bottomScripts\" class=\"script-container\">
                    <###end###>
                </div>
            ";
    }

    // line 145
    public function block_themescripts($context, array $blocks = [])
    {
        // line 146
        echo "                <script>
                    window.basicThemeScripts.init();
                </script>
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__4d0a2e07356364e4815fadc3a28a0bdc94fe87c12d87829b48fab32de3ec14ac";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 146,  260 => 145,  253 => 140,  250 => 139,  243 => 137,  240 => 136,  236 => 119,  233 => 118,  230 => 117,  228 => 113,  225 => 112,  218 => 108,  215 => 107,  208 => 103,  205 => 102,  199 => 130,  191 => 125,  185 => 122,  182 => 120,  180 => 112,  176 => 110,  173 => 107,  170 => 105,  167 => 102,  163 => 99,  160 => 98,  153 => 89,  150 => 88,  143 => 75,  140 => 74,  138 => 73,  135 => 72,  128 => 150,  126 => 145,  122 => 143,  119 => 139,  117 => 136,  112 => 133,  110 => 98,  106 => 97,  102 => 95,  98 => 92,  95 => 88,  92 => 86,  88 => 84,  84 => 82,  81 => 81,  63 => 78,  61 => 72,  47 => 71,  43 => 69,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4d0a2e07356364e4815fadc3a28a0bdc94fe87c12d87829b48fab32de3ec14ac", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 72, "if" => 78, "set" => 117, "include" => 118];
        static $filters = [];
        static $functions = ["include" => 75, "registerScript" => 125];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'include'],
                [],
                ['include', 'registerScript']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
