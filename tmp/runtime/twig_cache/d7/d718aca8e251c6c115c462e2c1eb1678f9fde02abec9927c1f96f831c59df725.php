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

/* /survey/questions/answer/yesno/radio/item.twig */
class __TwigTemplate_b4af1076fb1956761ed3278c232a4ac7221b4899ac4c9f0f21415dbc1721bf9d extends \Twig\Template
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
        // line 14
        echo "
<ul class=\"";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " list-unstyled form-inline\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <!-- Yes -->
    <li id=\"javatbd";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\"  class=\"answer-item radio-item\">
        <input
            type=\"radio\"
            name=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\"
            value=\"Y\"
            ";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["yChecked"] ?? null));
        echo "
        />
        <label for=\"answer";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "Y\" class=\"control-label answer-text\">
            ";
        // line 26
        echo gT("Yes");
        echo "
        </label>
    </li>

    <!-- No -->
    <li id=\"javatbd";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\"  class=\"answer-item radio-item\">
        <input
            type=\"radio\"
            name=\"";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\"
            value=\"N\"
            ";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(($context["nChecked"] ?? null));
        echo "
        />
        <label for=\"answer";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "N\" class=\"control-label answer-text\" >
            ";
        // line 40
        echo gT("No");
        echo "
        </label>
    </li>

    <!-- No answer -->
    ";
        // line 45
        if (($context["noAnswer"] ?? null)) {
            // line 46
            echo "        <li id=\"javatbd";
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "\"  class=\"answer-item radio-item noanswer-item\">
            <input
                type=\"radio\"
                name=\"";
            // line 49
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "\"
                id=\"answer";
            // line 50
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "\"
                value=\"\"
                ";
            // line 52
            echo $this->sandbox->ensureToStringAllowed(($context["naChecked"] ?? null));
            echo "
            />
            <label for=\"answer";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "\" class=\"control-label answer-text\">
                ";
            // line 55
            echo gT("No answer");
            echo "
            </label>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
        // line 61
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null))), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 62
($context["name"] ?? null))), "disabled" => true]], "method"));
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/yesno/radio/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  144 => 62,  143 => 61,  140 => 59,  133 => 55,  129 => 54,  124 => 52,  119 => 50,  115 => 49,  108 => 46,  106 => 45,  98 => 40,  94 => 39,  89 => 37,  84 => 35,  80 => 34,  74 => 31,  66 => 26,  62 => 25,  57 => 23,  52 => 21,  48 => 20,  42 => 17,  35 => 15,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/yesno/radio/item.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/yesno/radio/item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 45];
        static $filters = [];
        static $functions = ["gT" => 26];

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
