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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_13ea27702a14d16f5af1572e3c3488501a2ef9ea93a3566e152a6dfdf36793b9 extends \Twig\Template
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
        // line 12
        echo "
";
        // line 13
        $context["button_size_class"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))));
        // line 14
        $context["max_buttons_row"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])))) ? ("col-sm-2") : ($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])));
        // line 15
        echo "
<!-- answer_row -->
<div id=\"javatbd";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"bootstrap-buttons-div col-xs-12 ";
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null));
        echo "\">
    <div class=\"button-item btn btn-primary ";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null));
        echo " ";
        if ((($context["checkedState"] ?? null) != "")) {
            echo " active ";
        }
        echo " col-xs-12 col-sm-12\">
        <input
            class=\"bootstrap-radio sr-only\"
            type=\"radio\"
            name=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "\"
            value=";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "
            ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null));
        echo "
        />
        <label for=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"> ";
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null)));
        echo "
        </label>
    </div>
</div>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  73 => 25,  69 => 24,  64 => 23,  60 => 22,  49 => 18,  43 => 17,  39 => 15,  37 => 14,  35 => 13,  32 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "/home/techinformation/public_html/themes/question/bootstrap_buttons/survey/questions/answer/listradio/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 13, "if" => 18];
        static $filters = [];
        static $functions = ["processString" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['processString']
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
