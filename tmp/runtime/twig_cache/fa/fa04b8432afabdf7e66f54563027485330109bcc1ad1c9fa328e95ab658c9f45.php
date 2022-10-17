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

/* __string_template__a09e08bb0b857462a46d701f051c829efdae15a79a5fb58c93dbc75d2adce659 */
class __TwigTemplate_9702ee7e8ca13879d0b44e50e9186b24eea8824a3c01d6930459b7ed85a38061 extends \Twig\Template
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
        // line 76
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
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
        // line 79
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 83
        echo "       

        ";
        // line 86
        echo "        <article>

            <div id=\"";
        // line 88
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "dynamicreload", []));
        echo "\">
            ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "            </div>

        </article>
        ";
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 133
        echo "   

        ";
        // line 135
        $this->displayBlock('themescripts', $context, $blocks);
        // line 140
        echo "        
    </body>
</html>
";
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "
    ";
    }

    // line 79
    public function block_pjaxbegin($context, array $blocks = [])
    {
        // line 80
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        // line 90
        echo "
                ";
        // line 92
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 95
        echo "
                ";
        // line 97
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 100
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 110
        echo "
                ";
        // line 112
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        echo "

                ";
        // line 115
        echo "                ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END");
        // line 120
        echo "

            ";
    }

    // line 92
    public function block_nav_bar($context, array $blocks = [])
    {
        // line 93
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                ";
    }

    // line 97
    public function block_progress($context, array $blocks = [])
    {
        // line 98
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/progress_bar.twig");
        echo "
                ";
    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        // line 103
        echo "                    ";
        // line 107
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", []))) . ".twig");
        // line 108
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__a09e08bb0b857462a46d701f051c829efdae15a79a5fb58c93dbc75d2adce659", 108)->display(twig_array_merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 109
        echo "                ";
    }

    // line 126
    public function block_footer($context, array $blocks = [])
    {
        // line 127
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
        ";
    }

    // line 129
    public function block_pjaxend($context, array $blocks = [])
    {
        // line 130
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 135
    public function block_themescripts($context, array $blocks = [])
    {
        // line 136
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__a09e08bb0b857462a46d701f051c829efdae15a79a5fb58c93dbc75d2adce659";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 136,  240 => 135,  233 => 130,  230 => 129,  223 => 127,  220 => 126,  216 => 109,  213 => 108,  210 => 107,  208 => 103,  205 => 102,  198 => 98,  195 => 97,  188 => 93,  185 => 92,  179 => 120,  171 => 115,  165 => 112,  162 => 110,  160 => 102,  156 => 100,  153 => 97,  150 => 95,  147 => 92,  144 => 90,  141 => 89,  134 => 80,  131 => 79,  124 => 74,  122 => 73,  119 => 72,  112 => 140,  110 => 135,  106 => 133,  103 => 129,  101 => 126,  96 => 123,  94 => 89,  90 => 88,  86 => 86,  82 => 83,  79 => 79,  61 => 76,  59 => 72,  45 => 71,  41 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a09e08bb0b857462a46d701f051c829efdae15a79a5fb58c93dbc75d2adce659", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 72, "if" => 76, "set" => 107, "include" => 108];
        static $filters = [];
        static $functions = ["include" => 74, "registerScript" => 115];

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
