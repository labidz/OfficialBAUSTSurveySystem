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

/* /survey/questions/answer/multiplechoice/answer.twig */
class __TwigTemplate_38616d7325270fe2bd331af20cb975f89aabe73cbf03eb16469a233fc4285e20 extends \Twig\Template
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
        // line 11
        echo "<!-- Multiple Choice -->

<!-- answer -->

";
        // line 15
        $context["button_size_class"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["question_template_attribute"] ?? null), "button_size", [])))));
        // line 16
        $context["max_buttons_row"] = (((($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", []) == "default") || twig_test_empty($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])))) ? ("col-sm-2") : ($this->getAttribute(($context["question_template_attribute"] ?? null), "max_buttons_row", [])));
        // line 17
        echo "<input type=\"hidden\" name=\"MULTI";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" value=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null));
        echo "\" />
<div class=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " row ";
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
        echo "\" >
    <div class=\"list-unstyled form-inline btn-toolbar col-sm-12 \" data-toggle=\"buttons\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 21
            echo "            ";
            $context["aRow"] = twig_array_merge(twig_array_merge($this->sandbox->ensureToStringAllowed($context["aRow"]), ["button_size_class" => ($context["button_size_class"] ?? null)]), ["max_buttons_row" => ($context["max_buttons_row"] ?? null)]);
            // line 22
            echo "            ";
            $context["rowTemplate"] = (($this->getAttribute($context["aRow"], "other", [])) ? ("./survey/questions/answer/multiplechoice/rows/answer_row_other.twig") : ("./survey/questions/answer/multiplechoice/rows/answer_row.twig"));
            // line 23
            echo "            ";
            $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multiplechoice/answer.twig", 23)->display(twig_to_array($context["aRow"]));
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
    <!-- other -->
    ";
        // line 27
        if (twig_in_filter(($context["other"] ?? null), twig_get_array_keys_filter(($context["aRows"] ?? null)))) {
            // line 28
            echo "    <div class=\"hide col-sm-12\" id=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "other-div\">
            <div class=\"form-group text-item other-text-item\">
                ";
            // line 30
            echo gT("Other:");
            echo "
                <input
                    class=\"form-control input-sm ";
            // line 32
            echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null));
            echo " bootstrap-other-input\"
                    type=\"text\"
                    name=\"";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "other\"
                    id=\"answer";
            // line 35
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "other\"
                    value=\"";
            // line 36
            echo $this->sandbox->ensureToStringAllowed(($context["sValue"] ?? null));
            echo "\"
                    aria-labelledby=\"label-";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
            echo "-other\"
                    data-name=\"";
            // line 38
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
            echo "other\"
                />
            </div>
    </div>
    ";
        }
        // line 43
        echo "</div>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/multiplechoice/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  95 => 32,  90 => 30,  84 => 28,  82 => 27,  78 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  59 => 20,  55 => 19,  49 => 18,  42 => 17,  40 => 16,  38 => 15,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multiplechoice/answer.twig", "/home/techinformation/public_html/themes/question/bootstrap_buttons_multi/survey/questions/answer/multiplechoice/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "for" => 20, "include" => 23, "if" => 27];
        static $filters = ["merge" => 21, "keys" => 27];
        static $functions = ["gT" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'include', 'if'],
                ['merge', 'keys'],
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
