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

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_ca69e045064904acdddb27cc2871d182505385ee3182cf9e5b0a0a4695effc7e extends \Twig\Template
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
        // line 9
        echo "
<!-- List Radio -->
<!-- answer -->
";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null));
        echo "
<div class=\"container-fluid\">
    <div class=\"row ";
        // line 14
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " form-inline \" data-toggle=\"buttons\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">
    ";
        // line 16
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "

    ";
        // line 19
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 20
($context["name"] ?? null))), "disabled" => true]], "method"));
        // line 23
        echo "
    </div>
    ";
        // line 26
        echo "    <div class=\"row ls-js-hidden form-inline answer-item\" id=\"div";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "other\">
        <label for=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext\" class=\"control-label\" id=\"label-id-";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null));
        echo "</label>
        <input
        type=\"text\"
        class=\"form-control ";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo " input-sm\"
        id=\"answer";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext\"
        name=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "other\"
        >
        </label>
    </div>
</div>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  81 => 31,  77 => 30,  67 => 27,  62 => 26,  58 => 23,  56 => 20,  54 => 19,  48 => 16,  42 => 14,  37 => 12,  32 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "/home/techinformation/public_html/themes/question/bootstrap_buttons/survey/questions/answer/listradio/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
