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

/* /survey/questions/answer/arrays/array/no_dropdown/answer.twig */
class __TwigTemplate_f3f4a4385443ce18b3221ff5eed4432f434a937e4533d0cd95b45a36a1c800be extends \Twig\Template
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
        echo "<!-- Array -->

<!-- answer -->
<table class=\"";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " table table-bordered table-hover table-array-radio\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\"  style='width: ";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;' />
        ";
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aColumns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 22
            echo "            <col class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aColumn"], "class", []));
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aColumn"], "cellwidth", []));
            echo "%'/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
            ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["sHeaders"] ?? null));
        echo "
        </tr>
    </thead>
    <tbody>
         ";
        // line 31
        if ((($context["anscount"] ?? null) == 0)) {
            // line 32
            echo "            <tr>
                <th class=\"answertext\">
                     ";
            // line 34
            echo gT("Error: This question has no answers.");
            echo "
                </th>
            </tr>
         ";
        }
        // line 38
        echo "        
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 40
            echo "                ";
            $this->loadTemplate($this->getAttribute($context["aRow"], "template", []), "/survey/questions/answer/arrays/array/no_dropdown/answer.twig", 40)->display(twig_to_array($this->getAttribute($context["aRow"], "content", [])));
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        
    </tbody>
</table>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/array/no_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  99 => 41,  96 => 40,  92 => 39,  89 => 38,  82 => 34,  78 => 32,  76 => 31,  69 => 27,  64 => 24,  53 => 22,  48 => 21,  44 => 19,  37 => 17,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/array/no_dropdown/answer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/arrays/array/no_dropdown/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 21, "if" => 31, "include" => 40];
        static $filters = [];
        static $functions = ["gT" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
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
