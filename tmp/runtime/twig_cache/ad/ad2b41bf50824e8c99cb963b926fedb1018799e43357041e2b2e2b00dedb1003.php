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

/* /survey/questions/question_help/em_tip.twig */
class __TwigTemplate_6cc1a7c301bfe3a78b352da24c985b968c62485159c9499e93a100440305ed77 extends \Twig\Template
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
        if ( !($context["hideTip"] ?? null)) {
            // line 13
            echo "<div id='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreId"] ?? null));
            echo "' class='ls-question-message ";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo "'>
    <span class='fa fa-exclamation-circle' aria-hidden=\"true\"></span>
   ";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(($context["vtip"] ?? null));
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/survey/questions/question_help/em_tip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  34 => 13,  32 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/question_help/em_tip.twig", "/home/techinformation/public_html/application/views/survey/questions/question_help/em_tip.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
