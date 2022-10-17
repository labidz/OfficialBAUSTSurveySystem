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

/* /survey/questions/answer/boilerplate/answer.twig */
class __TwigTemplate_3d3638f4cc82cc33c728fe56c0175393eb3ec4b085c08ec8a572db7c0b632a37 extends \Twig\Template
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
        // line 7
        echo "<!-- boilerplate -->
<!-- Did we need really something ? Why not return an empty string ? -->
<!-- answer -->
";
        // line 10
        echo $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null));
        echo "

<input class=\"";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " boilerplate hidden\" type=\"hidden\" name=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" id=\"answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" value=\"\" />
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/boilerplate/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  37 => 10,  32 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/boilerplate/answer.twig", "/home/techinformation/public_html/application/views/survey/questions/answer/boilerplate/answer.twig");
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
