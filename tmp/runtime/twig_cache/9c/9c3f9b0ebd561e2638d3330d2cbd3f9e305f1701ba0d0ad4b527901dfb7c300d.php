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
class __TwigTemplate_9584026d9868a36cd3f33a83e429804f8a0426726368181fdf518b27895f9c92 extends \Twig\Template
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

<input type=\"hidden\" name=\"MULTI";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" value=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null));
        echo "\" />
<div class=\"";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " row\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <ul class=\"list-unstyled col-xs-12 col-sm-";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["iColumnWidth"] ?? null));
        echo "\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 19
            echo "            ";
            if (((0 == $this->getAttribute($context["loop"], "index0", []) % ($context["iMaxRowsByColumn"] ?? null)) && ($this->getAttribute($context["loop"], "index0", []) != 0))) {
                // line 20
                echo "                </ul>
                <ul class=\"list-unstyled col-xs-12 col-sm-";
                // line 21
                echo $this->sandbox->ensureToStringAllowed(($context["iColumnWidth"] ?? null));
                echo "\">
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            $context["rowTemplate"] = (($this->getAttribute($context["aRow"], "other", [])) ? ("./survey/questions/answer/multiplechoice/rows/answer_row_other.twig") : ("./survey/questions/answer/multiplechoice/rows/answer_row.twig"));
            // line 25
            echo "            <!-- Row ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", []));
            echo " -->
            ";
            // line 26
            $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multiplechoice/answer.twig", 26)->display(twig_to_array($context["aRow"]));
            // line 27
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ul>
<!-- end of answer -->
</div>
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
        return array (  109 => 29,  94 => 27,  92 => 26,  87 => 25,  85 => 24,  82 => 23,  77 => 21,  74 => 20,  71 => 19,  54 => 18,  50 => 17,  44 => 16,  38 => 15,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multiplechoice/answer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/multiplechoice/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 18, "if" => 19, "set" => 24, "include" => 26];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
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
