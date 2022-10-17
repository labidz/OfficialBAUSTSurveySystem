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

/* __string_template__07c6b5e0b4aee04f89733e21096b474c54b86c4893b3da8c7f79ec00fde27485 */
class __TwigTemplate_f6ca86f63eb648cefc95b7303f391750a86223af7e1afb340c7383f9a70995ee extends \Twig\Template
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
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "emcache", [])) {
            // line 80
            echo "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"on\"></span>
        ";
        } else {
            // line 82
            echo "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"off\"></span>
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 90
        echo "       

        ";
        // line 93
        echo "        <article>

            <div id=\"";
        // line 95
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "dynamicreload", []));
        echo "\">
            ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "            </div>

        </article>
        ";
        // line 134
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 141
        echo "   

        ";
        // line 143
        $this->displayBlock('themescripts', $context, $blocks);
        // line 148
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

    // line 86
    public function block_pjaxbegin($context, array $blocks = [])
    {
        // line 87
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        // line 97
        echo "            <p>Hello</p>

                ";
        // line 100
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 103
        echo "
                ";
        // line 105
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 108
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "
                ";
        // line 120
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        echo "

                ";
        // line 123
        echo "                ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END");
        // line 128
        echo "

            ";
    }

    // line 100
    public function block_nav_bar($context, array $blocks = [])
    {
        // line 101
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                ";
    }

    // line 105
    public function block_progress($context, array $blocks = [])
    {
        // line 106
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/progress_bar.twig");
        echo "
                ";
    }

    // line 110
    public function block_content($context, array $blocks = [])
    {
        // line 111
        echo "                    ";
        // line 115
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", []))) . ".twig");
        // line 116
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__07c6b5e0b4aee04f89733e21096b474c54b86c4893b3da8c7f79ec00fde27485", 116)->display(twig_array_merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 117
        echo "                ";
    }

    // line 134
    public function block_footer($context, array $blocks = [])
    {
        // line 135
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
        ";
    }

    // line 137
    public function block_pjaxend($context, array $blocks = [])
    {
        // line 138
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 143
    public function block_themescripts($context, array $blocks = [])
    {
        // line 144
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__07c6b5e0b4aee04f89733e21096b474c54b86c4893b3da8c7f79ec00fde27485";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 144,  255 => 143,  248 => 138,  245 => 137,  238 => 135,  235 => 134,  231 => 117,  228 => 116,  225 => 115,  223 => 111,  220 => 110,  213 => 106,  210 => 105,  203 => 101,  200 => 100,  194 => 128,  186 => 123,  180 => 120,  177 => 118,  175 => 110,  171 => 108,  168 => 105,  165 => 103,  162 => 100,  158 => 97,  155 => 96,  148 => 87,  145 => 86,  138 => 74,  136 => 73,  133 => 72,  126 => 148,  124 => 143,  120 => 141,  117 => 137,  115 => 134,  110 => 131,  108 => 96,  104 => 95,  100 => 93,  96 => 90,  93 => 86,  90 => 84,  86 => 82,  82 => 80,  79 => 79,  61 => 76,  59 => 72,  45 => 71,  41 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__07c6b5e0b4aee04f89733e21096b474c54b86c4893b3da8c7f79ec00fde27485", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 72, "if" => 76, "set" => 115, "include" => 116];
        static $filters = [];
        static $functions = ["include" => 74, "registerScript" => 123];

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
