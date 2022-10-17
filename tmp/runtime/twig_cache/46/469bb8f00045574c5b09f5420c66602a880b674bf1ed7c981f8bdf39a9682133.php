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

/* ./survey/questions/answer/multiplechoice/rows/answer_row.twig */
class __TwigTemplate_2fbf8fac3e681471d2873b269995ce5fe0eca9d0d9c4eba3a41099b75bde5835 extends \Twig\Template
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
<!-- answer_row -->
<div id='javatbd";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "' class=\"bootstrap-buttons-div col-xs-12 ";
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null));
        echo "\">
    <div class=\"button-item btn btn-primary ";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null));
        echo " ";
        if ((($context["checkedState"] ?? null) != "")) {
            echo " active ";
        }
        echo " col-xs-12 col-sm-12\">
        <input
            type=\"checkbox\"
            name=\"";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
            data-name=\"";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
            class=\"bootstrap-checkbox sr-only\"
            id=\"answer";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
            ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null));
        echo "
            value=\"Y\"
        />
        <label for=\"answer";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"checkbox-label control-label\">";
        echo $this->sandbox->ensureToStringAllowed(($context["question"] ?? null));
        echo "</label>
        <input
            type=\"hidden\"
            name=\"java";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
            id=\"java";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
            value=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "encode", [0 => ($context["sValue"] ?? null)], "method"));
        echo "\"
        />
    </div>
</div>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "./survey/questions/answer/multiplechoice/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  83 => 38,  79 => 37,  71 => 34,  65 => 31,  61 => 30,  56 => 28,  52 => 27,  42 => 24,  36 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/multiplechoice/rows/answer_row.twig", "/home/techinformation/public_html/themes/question/bootstrap_buttons_multi/survey/questions/answer/multiplechoice/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 24];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
