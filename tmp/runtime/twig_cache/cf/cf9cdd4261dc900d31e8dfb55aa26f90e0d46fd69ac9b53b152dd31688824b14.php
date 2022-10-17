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

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_7a5b3595ca75fc5340d91059b483ca5f461a5c0c83bf9435ad0cafaacb1d36cd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        echo "
";
        // line 23
        $context["aNavigator"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []);
        // line 24
        echo "
<!-- PRESENT THE NAVIGATOR -->
<div class=\"";
        // line 26
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorcontainer", []));
        echo " row navigator space-col\" id=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "navigatorcontainer", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorcontainer", []));
        echo ">

    <!-- Previous button container -->
    <div class=\"";
        // line 29
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonl", []));
        echo " col-xs-6 text-left\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonl", []));
        echo ">

        ";
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMovePrev", []), "show", [])) {
            // line 33
            echo "            <!-- Button previous -->
            <button ";
            // line 34
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonprev", []));
            echo " accesskey=\"p\" class=\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonprev", []));
            echo " btn btn-lg btn-default \" >
                ";
            // line 35
            echo gT("Previous");
            echo "
            </button>
        ";
        }
        // line 38
        echo "    </div>
    <div class=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonr", []));
        echo " col-xs-6 text-right\">

        ";
        // line 42
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", []), "show", [])) {
            // line 43
            echo "
            ";
            // line 45
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", []), "value", []) == "movesubmit")) {
                // line 46
                echo "                <!-- Button submit -->
                <button ";
                // line 47
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonsubmit", []));
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
                echo " ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonsubmit", []));
                echo " btn btn-lg btn-primary\">
                    ";
                // line 48
                echo gT("Submit");
                echo "
                </button>
            ";
            } else {
                // line 51
                echo "                <!-- Button Next -->
                <button ";
                // line 52
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonnext", []));
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
                echo " ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonnext", []));
                echo " btn btn-lg btn-primary \" >
                    ";
                // line 53
                echo gT("Next");
                echo "
                </button>
            ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </div>
</div>
<!-- Extra navigator part -->
";
        // line 60
        echo twig_include($this->env, $context, "./subviews/navigation/navigator_complement.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  132 => 57,  129 => 56,  123 => 53,  115 => 52,  112 => 51,  106 => 48,  98 => 47,  95 => 46,  92 => 45,  89 => 43,  86 => 42,  81 => 39,  78 => 38,  72 => 35,  64 => 34,  61 => 33,  58 => 32,  51 => 29,  41 => 26,  37 => 24,  35 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/navigation/navigator.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 32];
        static $filters = [];
        static $functions = ["gT" => 35, "include" => 60];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT', 'include']
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
