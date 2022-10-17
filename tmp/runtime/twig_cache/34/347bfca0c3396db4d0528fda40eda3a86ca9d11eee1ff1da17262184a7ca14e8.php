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

/* /survey/questions/answer/shortfreetext/text/item.twig */
class __TwigTemplate_4058f951585b866dac46fa5ad60d0b6d94a8a53ec9aa9dcb68513a63d643bc6f extends \Twig\Template
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
        // line 17
        echo "
<!-- answer -->
";
        // line 19
        if (($context["withColumn"] ?? null)) {
            // line 20
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 23
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 25
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 26
            echo "        <div class=\"ls-input-group\">
    ";
        }
        // line 28
        echo "        <!-- Prefix -->
        ";
        // line 29
        if ((LS_Twig_Extension::processString((("trim(" . ($context["prefix"] ?? null)) . ")")) != "")) {
            // line 30
            echo "            <div class='ls-input-group-extra prefix-text prefix'>";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)));
            echo "</div>
        ";
        }
        // line 32
        echo "
        <!-- Input -->
        <input
            class=\"form-control ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
            type=\"text\"
            name=\"";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            value=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "\"
            placeholder=\"";
        // line 40
        echo LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null)), 1), 1);
        echo "\"
            ";
        // line 41
        if (($context["inputsize"] ?? null)) {
            echo "size=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 42
        echo "            ";
        if (($context["maxlength"] ?? null)) {
            echo "maxlength=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 43
        echo "            ";
        if (($context["numberonly"] ?? null)) {
            echo "data-number=\"1\" ";
        }
        // line 44
        echo "            aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
        />

        <!-- Suffix -->
        ";
        // line 48
        if ((LS_Twig_Extension::processString((("trim(" . ($context["suffix"] ?? null)) . ")")) != "")) {
            // line 49
            echo "            <div class='ls-input-group-extra suffix-text suffix'>";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)));
            echo "</div>
        ";
        }
        // line 51
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 52
            echo "        </div>
    ";
        }
        // line 54
        if (($context["withColumn"] ?? null)) {
            // line 55
            echo "    </div>
</div>

";
        } else {
            // line 59
            echo "</div>
";
        }
        // line 61
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/shortfreetext/text/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 61,  149 => 59,  143 => 55,  141 => 54,  137 => 52,  134 => 51,  128 => 49,  126 => 48,  118 => 44,  113 => 43,  106 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  79 => 35,  74 => 32,  68 => 30,  66 => 29,  63 => 28,  59 => 26,  56 => 25,  48 => 23,  43 => 21,  38 => 20,  36 => 19,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/shortfreetext/text/item.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/shortfreetext/text/item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19];
        static $filters = [];
        static $functions = ["processString" => 29, "flatString" => 40];

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
