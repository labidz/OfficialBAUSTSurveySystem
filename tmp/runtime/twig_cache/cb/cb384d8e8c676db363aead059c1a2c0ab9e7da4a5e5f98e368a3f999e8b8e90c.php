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

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_7cae4c5f9d04169669427c22ab1c8c9394da2c0b55d76559ba38e75bb3f47132 extends \Twig\Template
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
        // line 15
        echo "

";
        // line 17
        $context["data_live_search"] = ((((($this->getAttribute(($context["question_template_attribute"] ?? null), "show_search", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "show_search", []))) || ($this->getAttribute(($context["question_template_attribute"] ?? null), "show_search", []) == "false"))) ? ("") : ("data-live-search='true'"));
        // line 18
        $context["show_tick"] = ((((($this->getAttribute(($context["question_template_attribute"] ?? null), "show_tick", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "show_tick", []))) || ($this->getAttribute(($context["question_template_attribute"] ?? null), "show_tick", []) == "false"))) ? ("") : ("show-tick"));
        // line 19
        $context["width_entry"] = ((((($this->getAttribute(($context["question_template_attribute"] ?? null), "width_entry", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "width_entry", []))) || ($this->getAttribute(($context["question_template_attribute"] ?? null), "width_entry", []) == "false"))) ? ("data-width='auto'") : (""));
        // line 20
        echo "
<!-- List Dropdown -->

<!-- answer-->
<div class=\"form-inline\">
    <div class=\"";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " form-group\">
        <select
                class=\"form-control list-question-select ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["show_tick"] ?? null));
        echo "\"
                ";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(($context["data_live_search"] ?? null));
        echo "
                ";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["width_entry"] ?? null));
        echo "
                data-none-selected-text=''
                name=\"";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                id=\"answer";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
                ";
        // line 33
        if (($context["dropdownSize"] ?? null)) {
            echo " size=";
            echo $this->sandbox->ensureToStringAllowed(($context["dropdownSize"] ?? null));
            echo " ";
        }
        // line 34
        echo "                aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
        >
                ";
        // line 37
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed(($context["sOptions"] ?? null));
        echo "
        </select>
            ";
        // line 40
        echo "            ";
        echo $this->sandbox->ensureToStringAllowed(($context["sOther"] ?? null));
        echo "

        ";
        // line 43
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 44
($context["name"] ?? null))), "disabled" => "disabled"]], "method"));
        // line 47
        echo "
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#answer";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "').selectpicker();
        });
    </script>
</div>
<!-- end of answer  -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  103 => 47,  101 => 44,  99 => 43,  93 => 40,  87 => 37,  81 => 34,  75 => 33,  71 => 32,  67 => 31,  62 => 29,  58 => 28,  54 => 27,  49 => 25,  42 => 20,  40 => 19,  38 => 18,  36 => 17,  32 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/answer.twig", "/home/techinformation/public_html/themes/question/bootstrap_dropdown/survey/questions/answer/list_dropdown/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 17, "if" => 33];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                []
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
