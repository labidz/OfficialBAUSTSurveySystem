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

/* ./subviews/messages/bootstrap_alert_modal.twig */
class __TwigTemplate_07179c126b0548f6ce18936847b41846898aa3c2bfbcee6462354cdc5b67cc8e extends \Twig\Template
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
        // line 21
        echo "


";
        // line 25
        if ((empty(LS_Twig_Extension::json_decode($this->getAttribute(($context["aSurveyInfo"] ?? null), "jPopup", []))) == false)) {
            // line 26
            echo "    ";
            echo LS_Twig_Extension::registerScript("startPopup", ("LSvar.startPopups = " . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "jPopup", []))), "POS_HEAD");
            echo "
    ";
            // line 27
            echo LS_Twig_Extension::registerScript("showStartPopups", (("window.templateCore.alertSurveyDialog(" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "jPopup", []))) . ");"), "POS_END");
            echo "
";
        }
        // line 29
        echo "
<!-- Bootstrap Modal Alert -->
";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "alertmodal", [])) {
            // line 32
            echo "<div id=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "alertmodal", []));
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "alertmodal", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "alertmodal", []));
            echo ">
    <div class=\"";
            // line 33
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modaldialog", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modaldialog", []));
            echo ">
        <div class=\"";
            // line 34
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalcontent", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalcontent", []));
            echo " >
            <div class=\"";
            // line 35
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalheader", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalheader", []));
            echo " >
                <button  ";
            // line 36
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalclosebutton", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalclosebutton", []));
            echo "\"  >&times;</button>
                <div class=\"";
            // line 37
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modaltitle", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modaltitle", []));
            echo ">&nbsp;</div>
            </div>
            <div class=\"";
            // line 39
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalbody", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalbody", []));
            echo ">
            </div>
            <div class=\"";
            // line 41
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalfooter", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalfooter", []));
            echo ">
                <a ";
            // line 42
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "modalfooterlink", []));
            echo "  class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "modalfooterlink", []));
            echo "\">";
            echo gT("Close");
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/bootstrap_alert_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  102 => 41,  95 => 39,  88 => 37,  82 => 36,  76 => 35,  70 => 34,  64 => 33,  55 => 32,  53 => 31,  49 => 29,  44 => 27,  39 => 26,  37 => 25,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/bootstrap_alert_modal.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/messages/bootstrap_alert_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25];
        static $filters = [];
        static $functions = ["empty" => 25, "json_decode" => 25, "registerScript" => 26, "gT" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['empty', 'json_decode', 'registerScript', 'gT']
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
