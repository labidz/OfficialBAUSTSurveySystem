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

/* survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig */
class __TwigTemplate_6f6af7933a0a1afab39d19e76d14216361f6270e25ad734bc434f558d3a61fae extends \Twig\Template
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
        // line 13
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answers-list radio-list ";
        if (($context["odd"] ?? null)) {
            echo " ls-odd";
        } else {
            echo " ls-even";
        }
        // line 16
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo "\" role=\"radiogroup\"  aria-labelledby=\"answertext";
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only";
        }
        echo "\">
        ";
        // line 18
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null)));
        echo "
        
        ";
        // line 21
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "hiddenField", [0 => ("java" . $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null))), 1 => ($context["value"] ?? null), 2 => ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["myfname"] ?? null))), "disabled" => true]], "method"));
        // line 25
        echo "
    </th>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aAnswerColumns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aAnswerColumn"]) {
            // line 29
            echo "            ";
            $this->loadTemplate("survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", 29)->display(twig_to_array($context["aAnswerColumn"]));
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAnswerColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ";
        // line 32
        echo "    
    ";
        // line 33
        if (($context["right_exists"] ?? null)) {
            // line 34
            echo "        <th class='answertextright information-item";
            if ((($context["answerwidth"] ?? null) == 0)) {
                echo " sr-only";
            }
            echo "'>";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertextright"] ?? null)));
            echo "</th>
    ";
        }
        // line 36
        echo "    
        ";
        // line 38
        echo "        ";
        if ( !twig_test_empty(($context["aNoAnswerColumn"] ?? null))) {
            // line 39
            echo "            ";
            $this->loadTemplate("survey/questions/answer/arrays/array/no_dropdown/rows/cells/answer_td.twig", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", 39)->display(twig_to_array(($context["aNoAnswerColumn"] ?? null)));
            // line 40
            echo "        ";
        }
        // line 41
        echo "    
</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 36,  94 => 34,  92 => 33,  89 => 32,  87 => 31,  81 => 30,  78 => 29,  74 => 28,  69 => 25,  67 => 22,  65 => 21,  60 => 18,  52 => 17,  44 => 16,  36 => 15,  32 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/arrays/array/no_dropdown/rows/answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15, "for" => 28, "include" => 29];
        static $filters = [];
        static $functions = ["processString" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'include'],
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
