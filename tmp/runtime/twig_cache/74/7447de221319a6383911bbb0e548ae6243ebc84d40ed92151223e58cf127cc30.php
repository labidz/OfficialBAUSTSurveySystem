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

/* /survey/questions/answer/listradio/rows/answer_row_noanswer.twig */
class __TwigTemplate_db38a1203d9210c18a7e916ddbe2614301f99c9ae6f35134a14f6d0e2a7dba9a extends \Twig\Template
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
        // line 10
        echo "
";
        // line 11
        $context["button_size_class"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))));
        // line 12
        $context["max_buttons_row"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])))) ? ("col-sm-2") : ($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])));
        // line 13
        echo "
<!-- answer_row_noanswer -->
<div class=\"bootstrap-buttons-div col-xs-12 ";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null));
        echo "\">
    <div id=\"javatbd";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" class=\"button-item btn btn-primary ";
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null));
        echo " ";
        if ((($context["check_ans"] ?? null) != "")) {
            echo " active ";
        }
        echo " col-xs-12 col-sm-12\">
        <input
            class=\"bootstrap-radio sr-only\"
            type=\"radio\"
            name=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            value=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "\"
            ";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["check_ans"] ?? null));
        echo "
            />
        <label for=\"answer";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">
            <span class=\"\" aria-hidden=\"true\"></span> ";
        // line 26
        echo gT("No answer");
        echo "
        </label>
    </div>
</div>
<!-- endof answer_row_noanswer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  77 => 25,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  47 => 16,  43 => 15,  39 => 13,  37 => 12,  35 => 11,  32 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig", "/home/techinformation/public_html/themes/question/bootstrap_buttons/survey/questions/answer/listradio/rows/answer_row_noanswer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 16];
        static $filters = [];
        static $functions = ["gT" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
