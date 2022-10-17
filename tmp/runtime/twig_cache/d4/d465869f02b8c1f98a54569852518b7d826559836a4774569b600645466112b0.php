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

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_90bb6a29eb9805a0ff5fdd5e3ce0d0dc010fc5a52c52114825070f2c3171dbaa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'endtext' => [$this, 'block_endtext'],
            'printanswer' => [$this, 'block_printanswer'],
            'publicstatistics' => [$this, 'block_publicstatistics'],
            'endurl' => [$this, 'block_endurl'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "./subviews/content/submit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("./subviews/content/submit.twig", "./subviews/content/submit_preview.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_endtext($context, array $blocks = [])
    {
        // line 22
        echo "    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">";
        echo gT("Did Not Save");
        echo " </strong>
        ";
        // line 23
        echo gT("Your survey responses have not been recorded. This survey is not yet active.");
        echo "
    </div>
    ";
        // line 25
        $this->displayParentBlock("endtext", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_printanswer($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPrintAnswers", []), "show", []) == true)) {
            // line 30
            echo "        <!--  Link to Print Answer Preview -->
        <div class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdiva", []));
            echo " disabled\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdiv", []));
            echo ">
            <a href=\"#\" title=\" ";
            // line 32
            echo gT("Note: This link only works if the survey is activated.");
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivaa", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivaa", []));
            echo ">
                ";
            // line 33
            echo gT("Print your answers.");
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 38
    public function block_publicstatistics($context, array $blocks = [])
    {
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPublicStatistics", []), "show", []) == true)) {
            // line 41
            echo "        <!-- Link to Public statistics -->
        <div class=\"";
            // line 42
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivb", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivb", []));
            echo ">
            <a href=\"#\" title=\" ";
            // line 43
            echo gT("Note: This link only works if the survey is activated.");
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivba", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivba", []));
            echo ">
                ";
            // line 44
            echo gT("View the statistics for this survey.");
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 49
    public function block_endurl($context, array $blocks = [])
    {
        // line 50
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrl", [])) {
            // line 51
            echo "        <a href=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrl", []));
            echo "\">";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrlDescription", []));
            echo "
        ";
            // line 52
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "autoredirect", []) == "Y")) {
                // line 53
                echo "            <small class=\"text-info\">";
                echo gT("Note: Automatically loading the end URL works only if the survey is activated.");
                echo "</small>
        ";
            }
            // line 55
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 55,  146 => 53,  144 => 52,  137 => 51,  134 => 50,  131 => 49,  122 => 44,  114 => 43,  108 => 42,  105 => 41,  102 => 40,  100 => 39,  97 => 38,  88 => 33,  80 => 32,  74 => 31,  71 => 30,  68 => 29,  66 => 28,  63 => 27,  57 => 25,  52 => 23,  47 => 22,  44 => 21,  34 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/submit_preview.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/content/submit_preview.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 29];
        static $filters = [];
        static $functions = ["gT" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
