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

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_9a4f53d7f70f2096194f261543b2d3aa0299326bfcbe702d538172f4561967ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'anonymous' => [$this, 'block_anonymous'],
            'datasecurity' => [$this, 'block_datasecurity'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        echo "
<!-- Privacy message -->

<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacycontainer", []));
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "privacycontainer", []));
        echo ">
    <div class=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacycol", []));
        echo "  col-sm-12 col-centered\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "privacycol", []));
        echo ">
        ";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "hideprivacyinfo", []) == "off")) {
            // line 24
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 51
        echo "    </div>
</div>
";
    }

    // line 24
    public function block_anonymous($context, array $blocks = [])
    {
        // line 25
        echo "                ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "anonymized", []) == "Y")) {
            // line 26
            echo "                <div class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacyhead", []));
            echo " h4 text-primary \" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "privacyhead", []));
            echo ">
                    ";
            // line 27
            echo gT("This survey is anonymous.");
            echo "
                </div>
                <div>
                    <p class=\"";
            // line 30
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacybody", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "privacybody", []));
            echo ">
                        ";
            // line 31
            echo gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.");
            // line 33
            echo "
                    </p>
                    <p class=\"";
            // line 35
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacybody", []));
            echo "\">
                        ";
            // line 36
            echo gT("If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses.");
            // line 38
            echo "
                    </p>
                </div>
                ";
        }
        // line 42
        echo "            ";
    }

    // line 44
    public function block_datasecurity($context, array $blocks = [])
    {
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", []) == 1)) {
            // line 46
            echo "                ";
            echo twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig");
            echo "
            ";
        } elseif (($this->getAttribute(        // line 47
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", []) == 2)) {
            // line 48
            echo "                ";
            echo twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig");
            echo "
            ";
        }
        // line 50
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  128 => 48,  126 => 47,  121 => 46,  118 => 45,  115 => 44,  111 => 42,  105 => 38,  103 => 36,  99 => 35,  95 => 33,  93 => 31,  87 => 30,  81 => 27,  74 => 26,  71 => 25,  68 => 24,  62 => 51,  59 => 44,  56 => 43,  53 => 24,  51 => 23,  45 => 22,  39 => 21,  34 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/privacy/privacy.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 23, "block" => 24];
        static $filters = [];
        static $functions = ["gT" => 27, "include" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
