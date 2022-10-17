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

/* survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig */
class __TwigTemplate_fdd3891b60c4c971ad2e57bd47a8951fc18d8651c2fc8a1fe0ea2cbd938aa4fe extends \Twig\Template
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
        // line 20
        echo "
<!--answer_row_inputtext -->
<li id=\"javatbd";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"question-item answer-item text-item form-group";
        if (($context["alert"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo " >
    <label class=\"control-label col-xs-12 col-sm-";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["sLabelWidth"] ?? null));
        if ((($context["sLabelWidth"] ?? null) == 0)) {
            echo " hidden";
        }
        echo "\" for=\"answer";
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
        ";
        // line 24
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["question"] ?? null)));
        echo "
    </label>
    <div class=\"col-xs-12 col-sm-";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(($context["sInputContainerWidth"] ?? null));
        echo "\">
        
        ";
        // line 28
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 29
            echo "            <div class=\"ls-input-group\">
        ";
        }
        // line 31
        echo "            ";
        if ((($context["prefix"] ?? null) != "")) {
            // line 32
            echo "                <div class=\"ls-input-group-extra prefix-text prefix\">
                    ";
            // line 33
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 36
        echo "            <input
                class=\"form-control ";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
                type=\"text\"
                name=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
                id=\"answer";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
                value=\"";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "\"
                placeholder=\"";
        // line 42
        echo LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null)), 1), 1);
        echo "\"
                ";
        // line 43
        if (($context["inputsize"] ?? null)) {
            echo " size=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 44
        echo "                ";
        if (($context["maxlength"] ?? null)) {
            echo " maxlength=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 45
        echo "                ";
        if (($context["numbersonly"] ?? null)) {
            echo " data-number=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["numbersonly"] ?? null));
            echo "\" ";
        }
        // line 46
        echo "                />
            ";
        // line 47
        if ((($context["suffix"] ?? null) != "")) {
            // line 48
            echo "                <div class=\"ls-input-group-extra suffix-text suffix\">
                    ";
            // line 49
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 52
        echo "        ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 53
            echo "            </div>
        ";
        }
        // line 55
        echo "    </div>
</li>
<!-- end of answer_row_inputtext -->
";
    }

    public function getTemplateName()
    {
        return "survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  145 => 53,  142 => 52,  136 => 49,  133 => 48,  131 => 47,  128 => 46,  121 => 45,  114 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  87 => 37,  84 => 36,  78 => 33,  75 => 32,  72 => 31,  68 => 29,  66 => 28,  61 => 26,  56 => 24,  47 => 23,  36 => 22,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 22];
        static $filters = [];
        static $functions = ["processString" => 24, "flatString" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString']
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
