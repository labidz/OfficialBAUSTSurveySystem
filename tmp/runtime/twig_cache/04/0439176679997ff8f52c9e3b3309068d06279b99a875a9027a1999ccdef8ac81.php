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

/* __string_template__0640450971c4deb64b422f3f152c8007823cf544592b8214c976155ac4b88f8e */
class __TwigTemplate_71ea3b183cc45f6a496440671b299843dd8a70ca076d7e0e7b579932ebf90b1d extends \Twig\Template
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
        // line 77
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
        // line 80
        echo "            ";
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "emcache", [])) {
            // line 81
            echo "                <span style=\"display: none;\" id=\"__emcache_debug\" value=\"on\"></span>
            ";
        } else {
            // line 83
            echo "                <span style=\"display: none;\" id=\"__emcache_debug\" value=\"off\"></span>
            ";
        }
        // line 85
        echo "
            ";
        // line 87
        echo "            ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 91
        echo "       

            ";
        // line 94
        echo "            <article>
                
                <div id=\"";
        // line 96
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "dynamicreload", []));
        echo "\">
                ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "                </div>

            </article>
            ";
        // line 135
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "            ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 142
        echo "   

            ";
        // line 144
        $this->displayBlock('themescripts', $context, $blocks);
        // line 149
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
        echo "        
        ";
        // line 75
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "
        ";
    }

    // line 87
    public function block_pjaxbegin($context, array $blocks = [])
    {
        // line 88
        echo "                <div id=\"beginScripts\" class=\"script-container\">
                    <###begin###>
                </div>
            ";
    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        // line 98
        echo "                

                    ";
        // line 101
        echo "                    ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 104
        echo "
                    ";
        // line 106
        echo "                    ";
        $this->displayBlock('progress', $context, $blocks);
        // line 109
        echo "
                    <!-- Outer Frame Container -->
                    ";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "
                    ";
        // line 121
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        echo "

                    ";
        // line 124
        echo "                    ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
                    if(window.basicThemeScripts === undefined){ 
                        window.basicThemeScripts = new ThemeScripts(); 
                    } 
                    basicThemeScripts.initGlobal(); 
                    ", "POS_END");
        // line 129
        echo "

                ";
    }

    // line 101
    public function block_nav_bar($context, array $blocks = [])
    {
        // line 102
        echo "                        ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                    ";
    }

    // line 106
    public function block_progress($context, array $blocks = [])
    {
        // line 107
        echo "                        ";
        echo twig_include($this->env, $context, "./subviews/header/progress_bar.twig");
        echo "
                    ";
    }

    // line 111
    public function block_content($context, array $blocks = [])
    {
        // line 112
        echo "                        ";
        // line 116
        echo "                        ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", []))) . ".twig");
        // line 117
        echo "                        ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__0640450971c4deb64b422f3f152c8007823cf544592b8214c976155ac4b88f8e", 117)->display(twig_array_merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 118
        echo "                    ";
    }

    // line 135
    public function block_footer($context, array $blocks = [])
    {
        // line 136
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
            ";
    }

    // line 138
    public function block_pjaxend($context, array $blocks = [])
    {
        // line 139
        echo "                <div id=\"bottomScripts\" class=\"script-container\">
                    <###end###>
                </div>
            ";
    }

    // line 144
    public function block_themescripts($context, array $blocks = [])
    {
        // line 145
        echo "                <script>
                    window.basicThemeScripts.init();
                </script>
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__0640450971c4deb64b422f3f152c8007823cf544592b8214c976155ac4b88f8e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 145,  259 => 144,  252 => 139,  249 => 138,  242 => 136,  239 => 135,  235 => 118,  232 => 117,  229 => 116,  227 => 112,  224 => 111,  217 => 107,  214 => 106,  207 => 102,  204 => 101,  198 => 129,  190 => 124,  184 => 121,  181 => 119,  179 => 111,  175 => 109,  172 => 106,  169 => 104,  166 => 101,  162 => 98,  159 => 97,  152 => 88,  149 => 87,  143 => 75,  140 => 74,  138 => 73,  135 => 72,  128 => 149,  126 => 144,  122 => 142,  119 => 138,  117 => 135,  112 => 132,  110 => 97,  106 => 96,  102 => 94,  98 => 91,  95 => 87,  92 => 85,  88 => 83,  84 => 81,  81 => 80,  63 => 77,  61 => 72,  47 => 71,  43 => 69,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0640450971c4deb64b422f3f152c8007823cf544592b8214c976155ac4b88f8e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 72, "if" => 77, "set" => 116, "include" => 117];
        static $filters = [];
        static $functions = ["include" => 75, "registerScript" => 124];

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
