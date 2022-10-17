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

/* ./subviews/survey/question.twig */
class __TwigTemplate_b2c44f2d5beb9fcaebb88a46c52a00ca0631a719ff2801e4d366b25246d50618 extends \Twig\Template
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
        // line 28
        echo "

";
        // line 31
        $context["aShow"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aShow", []);
        // line 32
        echo "
    <!-- Question ";
        // line 33
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", []));
        echo " -->

    ";
        // line 36
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/question_text_container.twig");
        echo "


    ";
        // line 40
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/valid_message_and_help.twig");
        echo "

    ";
        // line 43
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/answers.twig");
        echo "

    ";
        // line 46
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/survey_question_help.twig");
        echo "

    <!-- End of question ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", []));
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 48,  65 => 46,  59 => 43,  53 => 40,  46 => 36,  41 => 33,  38 => 32,  36 => 31,  32 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/survey/question.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31];
        static $filters = [];
        static $functions = ["include" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                [],
                ['include']
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
