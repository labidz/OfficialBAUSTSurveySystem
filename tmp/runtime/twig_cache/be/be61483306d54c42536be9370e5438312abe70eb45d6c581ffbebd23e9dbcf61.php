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
class __TwigTemplate_340f73be19e0981fd7c6b1ca2c469ddae8196a64f6cb1c823a5c855cb33e280a extends \Twig\Template
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
<!-- answer_row_noanswer -->
<li id='javatbd";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "' class=\"form-group answer-item radio-item no-anwser-item\">
    <input
    type=\"radio\"
    name=\"";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
    id=\"answer";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
    value=\"\"
    ";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["check_ans"] ?? null));
        echo "
    onclick=\"if (document.getElementById('answer";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext') != null) document.getElementById('answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext').value='';";
        echo $this->sandbox->ensureToStringAllowed(($context["checkconditionFunction"] ?? null));
        echo "(this.value, this.name, this.type)\"
    />
    <label for=\"answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" class=\"control-label radio-label\">
        ";
        // line 22
        echo gT("No answer");
        echo "
    </label>
</li>
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
        return array (  68 => 22,  64 => 21,  55 => 19,  51 => 18,  46 => 16,  42 => 15,  36 => 12,  32 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row_noanswer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/listradio/rows/answer_row_noanswer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["gT" => 22];

        try {
            $this->sandbox->checkSecurity(
                [],
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
