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

/* /survey/questions/answer/multipleshorttext/answer.twig */
class __TwigTemplate_920359cfe5410c72cef7ac97421cfe86b41cef1cd09ff4a4943f829bce6a2b0a extends \Twig\Template
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
        echo "<!-- Multiple Shor Text -->

<!-- answer -->
<ul class=\"";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " list-unstyled form-horizontal\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    ";
        // line 13
        if (twig_test_empty(($context["aRows"] ?? null))) {
            // line 14
            echo "        ";
            $this->loadTemplate("survey/questions/answer/multipleshorttext/empty.twig", "/survey/questions/answer/multipleshorttext/answer.twig", 14)->display($context);
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
                // line 17
                echo "            ";
                $context["rowTemplate"] = (($this->getAttribute($context["aRow"], "textarea", [])) ? ("survey/questions/answer/multipleshorttext/rows/answer_row_textarea.twig") : ("survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig"));
                // line 18
                echo "            ";
                $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multipleshorttext/answer.twig", 18)->display(twig_to_array($context["aRow"]));
                // line 19
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        // line 21
        echo "
</ul>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/multipleshorttext/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  68 => 20,  62 => 19,  59 => 18,  56 => 17,  51 => 16,  48 => 15,  45 => 14,  43 => 13,  37 => 12,  32 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multipleshorttext/answer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/multipleshorttext/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13, "include" => 14, "for" => 16, "set" => 17];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'for', 'set'],
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
