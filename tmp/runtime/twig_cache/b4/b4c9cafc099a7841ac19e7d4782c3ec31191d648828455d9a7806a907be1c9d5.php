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

/* /survey/questions/answer/date//selector/answer.twig */
class __TwigTemplate_621f13c2b58fe2591f1a728f47b72f1f86b8e01bd64ddb8016d303aedaeae8c9 extends \Twig\Template
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
        // line 18
        echo "
<!-- Date, selector layout -->

<!-- answer -->
<div class='form-inline'>
    <div class='";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " form-group'>
        <label for='answer";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "' class='sr-only control-label'>
            ";
        // line 25
        echo sprintf(gT("Date format: %s"), $this->sandbox->ensureToStringAllowed(($context["dateformatdetails"] ?? null)));
        echo "
        </label>
        <div id=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "_datetimepicker\" class=\"input-group answer-item date-timepicker-group\" data-basename=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"><!-- data-basename used in js function -->
            ";
        // line 28
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "textField", [0 => ($context["name"] ?? null), 1 => ($context["dateoutput"] ?? null), 2 => ["id" => ("answer" . $this->sandbox->ensureToStringAllowed(        // line 29
($context["name"] ?? null))), "class" => "form-control date-control date", "aria-describedby" => ("ls-question-text-" . $this->sandbox->ensureToStringAllowed(        // line 31
($context["name"] ?? null)))]], "method"));
        // line 32
        echo "
            <div class=\"input-group-addon btn btn-primary\">
                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i><span class=\"sr-only\"> ";
        // line 34
        echo gT("Open date/time selector");
        echo "</span>
            </div>
        </div>
        ";
        // line 37
        if (($context["hidetip"] ?? null)) {
            // line 38
            echo "        <p class=\"tip help-block\" aria-hidden='true'>
           ";
            // line 39
            echo sprintf(gT("Format: %s"), $this->sandbox->ensureToStringAllowed(($context["dateformatdetails"] ?? null)));
            echo "
        </p>
        ";
        }
        // line 42
        echo "    </div>
</div>

<div class='hidden' style='display:none'>
    <!-- Obs: No spaces in the div - it will mess up Javascript string parsing , EM replacement done in qanda -->
    <div id='datemin";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "'>";
        echo $this->sandbox->ensureToStringAllowed(($context["mindate"] ?? null));
        echo "</div>
    <div id='datemax";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "'>";
        echo $this->sandbox->ensureToStringAllowed(($context["maxdate"] ?? null));
        echo "</div>
    <div id='dateformat";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "'>";
        echo $this->sandbox->ensureToStringAllowed(($context["dateformatdetailsjs"] ?? null));
        echo "</div>
</div>

    ";
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        $context["aJsonOption"] = CJSON::encode(["format" =>         // line 55
($context["dateformatdetailsjs"] ?? null), "minDate" => ((twig_in_filter("{",         // line 56
($context["mindate"] ?? null))) ? ("1900-01-01") : (($context["mindate"] ?? null))), "maxDate" => ((twig_in_filter("{",         // line 57
($context["maxdate"] ?? null))) ? ("2037-12-31") : (($context["maxdate"] ?? null))), "stepping" =>         // line 58
($context["minuteStep"] ?? null), "sideBySide" => true]);
        // line 62
        echo "    
    ";
        // line 63
        echo LS_Twig_Extension::registerScript(("doDatetimepicker_" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), (((("jQuery('#answer" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))) . "_datetimepicker').datetimepicker(") . $this->sandbox->ensureToStringAllowed(($context["aJsonOption"] ?? null))) . ");"), "POS_POSTSCRIPT");
        echo "
    ";
        // line 65
        echo "    ";
        echo LS_Twig_Extension::registerScript(("resetDate" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), (((("\$('#answer" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))) . "').val('") . $this->sandbox->ensureToStringAllowed(($context["dateoutput"] ?? null))) . "');"), "POS_POSTSCRIPT");
        echo "
    
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/date//selector/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  122 => 63,  119 => 62,  117 => 58,  116 => 57,  115 => 56,  114 => 55,  112 => 54,  110 => 53,  102 => 49,  96 => 48,  90 => 47,  83 => 42,  77 => 39,  74 => 38,  72 => 37,  66 => 34,  62 => 32,  60 => 31,  59 => 29,  58 => 28,  52 => 27,  47 => 25,  43 => 24,  39 => 23,  32 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/date//selector/answer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/date/selector/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 37, "set" => 54];
        static $filters = [];
        static $functions = ["sprintf" => 25, "gT" => 25, "json_encode" => 54, "registerScript" => 63];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['sprintf', 'gT', 'json_encode', 'registerScript']
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
