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

/* survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig */
class __TwigTemplate_68db6387b75b7c3387562dd2a0bd2031eade94dd6f45630d3c5522785fbaf113 extends \Twig\Template
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
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 14
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null));
        if ((($context["ld"] ?? null) == "")) {
            echo " noanswer-item";
        }
        echo " answer-item radio-item\">
    <input
        type=\"radio\"
        name=\"";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
        value=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null));
        echo "\"
        id=\"answer";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "-";
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null));
        echo "\"
        ";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["CHECKED"] ?? null));
        echo "
    />
    <label for=\"answer";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "-";
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null));
        echo "\" class=\"ls-label-xs-visibility\">
        ";
        // line 23
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["label"] ?? null)));
        echo "
    </label>
</td>
<!-- end of answer_td -->
";
    }

    public function getTemplateName()
    {
        return "survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  64 => 22,  59 => 20,  53 => 19,  49 => 18,  45 => 17,  36 => 14,  32 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14];
        static $filters = [];
        static $functions = ["processString" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
