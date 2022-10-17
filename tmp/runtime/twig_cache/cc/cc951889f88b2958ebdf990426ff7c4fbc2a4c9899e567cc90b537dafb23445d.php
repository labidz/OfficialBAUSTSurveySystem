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

/* ./subviews/survey/question_subviews/question_text_content.twig */
class __TwigTemplate_8929c3c23dc3b3c7448a059ef940ea562a4be88af9b2a6a21da548372799d85c extends \Twig\Template
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
        // line 19
        echo "

";
        // line 22
        if (($this->getAttribute(($context["aQuestion"] ?? null), "mandatory", []) != "")) {
            // line 23
            echo "    <!-- Add a visual information + just Mandatory string for aria : can be improved -->
    <div class=\"";
            // line 24
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questionasterix", []));
            echo " pull-left\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questionasterix", []));
            echo " >
        <small class=\"";
            // line 25
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questionasterixsmall", []));
            echo " text-danger fa fa-asterisk small\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questionasterixsmall", []));
            echo "></small>
        <span class=\"";
            // line 26
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questionasterixspan", []));
            echo " sr-only text-danger\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questionasterixspan", []));
            echo " >
            ";
            // line 27
            echo gT("(This question is mandatory)");
            echo "
        </span>
    </div>
";
        }
        // line 31
        echo "
";
        // line 33
        if ($this->getAttribute(($context["aShow"] ?? null), "question_number", [])) {
            // line 34
            echo "    <span class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questionnumber", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questionnumber", []));
            echo " >
        ";
            // line 35
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "number", []));
            echo "
    </span>
";
        }
        // line 38
        echo "
";
        // line 40
        if ($this->getAttribute(($context["aShow"] ?? null), "question_code", [])) {
            // line 41
            echo "    <span class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questioncode", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questioncode", []));
            echo ">
        ";
            // line 42
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", []));
            echo "
    </span>
";
        }
        // line 45
        echo "
";
        // line 47
        echo "<div class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questiontext", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questiontext", []));
        echo ">
    <div id=\"ls-question-text-";
        // line 48
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "SGQ", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lsquestiontext", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lsquestiontext", []));
        echo ">
        ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "text", []));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/question_text_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  112 => 48,  105 => 47,  102 => 45,  96 => 42,  89 => 41,  87 => 40,  84 => 38,  78 => 35,  71 => 34,  69 => 33,  66 => 31,  59 => 27,  53 => 26,  47 => 25,  41 => 24,  38 => 23,  36 => 22,  32 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/question_text_content.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/survey/question_subviews/question_text_content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 22];
        static $filters = ["raw" => 49];
        static $functions = ["gT" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw'],
                ['gT']
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
