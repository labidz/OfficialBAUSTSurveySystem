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

/* ./subviews/content/load.twig */
class __TwigTemplate_46c8b4fd35ae0aabb75f1ec45911995a2dd4eefbee52cf1ce24856ad77229da1 extends \Twig\Template
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
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", []), "ScriptsAndHiddenInputs", []));
        echo "

    <div class=\"";
        // line 36
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savemessage", []));
        echo " well clearfix\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savemessage", []));
        echo ">
        <div class=\"";
        // line 37
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savemessagetitle", []));
        echo " h2\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savemessagetitle", []));
        echo ">";
        echo gT("Load unfinished survey");
        echo "</div>
        <div class=\"";
        // line 38
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savemessagetext", []));
        echo " text-info\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savemessagetext", []));
        echo ">
            <p ";
        // line 39
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savemessagetextp", []));
        echo " > ";
        echo gT("You can load a survey that you have previously saved from this screen.");
        echo " </p>
            <p ";
        // line 40
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savemessagetextpb", []));
        echo " > ";
        echo gT("Type in the 'name' you used to save the survey, and the password.");
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadform", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadform", []));
        echo ">

        ";
        // line 46
        if ((LS_Twig_Extension::safecount($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", []), "aErrors", [])) > 0)) {
            // line 47
            echo "            <ul class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadformul", []));
            echo " alert alert-danger list-unstyled \" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadformul", []));
            echo " >
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", []), "aErrors", []));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 49
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadformulli", []));
                echo ">";
                echo $this->sandbox->ensureToStringAllowed($context["error"]);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </ul>
        ";
        }
        // line 53
        echo "
        ";
        // line 59
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-load", "name" => "form-load", "class" => $this->getAttribute($this->getAttribute(        // line 62
($context["aSurveyInfo"] ?? null), "class", []), "loadformform", [])];
        // line 65
        echo "
        ";
        // line 71
        echo "        <!-- Save Form -->
        ";
        // line 72
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 73
($context["C"] ?? null), "Html", []), "form", [0 => $this->getAttribute(        // line 74
($context["aSurveyInfo"] ?? null), "surveyUrl", []), 1 => "post", 2 =>         // line 76
($context["htmlOptions"] ?? null)], "method"));
        // line 78
        echo "
            <!-- Hidden fields  -->
            ";
        // line 80
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", []), "sHiddenField", []));
        echo "

            <!-- Name and Password -->
            <div class=\"";
        // line 83
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveform", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveform", []));
        echo ">

                <!-- Saved name  -->
                <div class=\"";
        // line 86
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrow", []));
        echo " row form-group \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrow", []));
        echo ">
                    <label class=\"";
        // line 87
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrowlabel", []));
        echo " control-label col-sm-3 \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrowlabel", []));
        echo ">
                        ";
        // line 88
        echo gT("Saved name:");
        echo "
                        <small class=\"";
        // line 89
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrowlabelsmall", []));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrowlabelsmall", []));
        echo " ></small>
                        <span class=\"";
        // line 90
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrowlabelspan", []));
        echo " sr-only text-danger asterisk\"  ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrowlabelspan", []));
        echo " >";
        echo gT("Mandatory");
        echo "<span>
                    </label>
                    <div class=\"";
        // line 92
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrowcol", []));
        echo " col-sm-7 input-cell\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrowcol", []));
        echo ">
                        <input class=\"";
        // line 93
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformrowcolinput", []));
        echo " form-control\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformrowcolinput", []));
        echo " id=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "saveformrowcolinput", []));
        echo "\" >
                    </div>
                </div>

                <!-- Password -->
                <div class=\"";
        // line 98
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "passwordrow", []));
        echo " row form-group \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "passwordrow", []));
        echo ">
                    <label class='";
        // line 99
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "passwordrowcol", []));
        echo " control-label col-sm-3 '  ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "passwordrowcol", []));
        echo " >
                        ";
        // line 100
        echo gT("Password:");
        echo "
                        <small class=\"";
        // line 101
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "passwordrowcolsmall", []));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "passwordrowcolsmall", []));
        echo "></small>
                        <span class=\"";
        // line 102
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "passwordrowcolspan", []));
        echo " sr-only text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "passwordrowcolspan", []));
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 105
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "passwordrowinput", []));
        echo " col-sm-7'>
                        <input class='form-control' ";
        // line 106
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "passwordrowinputi", []));
        echo " >
                    </div>
                </div>

                ";
        // line 110
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", []), "aCaptcha", []), "show", [])) {
            // line 111
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 112
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharow", []));
            echo " row form-group ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharow", []));
            echo ">
                        <label class='";
            // line 113
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharowlabel", []));
            echo " control-label col-sm-3 '  ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowlabel", []));
            echo ">
                            ";
            // line 114
            echo gT("Security question:");
            echo "
                        </label>
                        <div class='";
            // line 116
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharowcol", []));
            echo " col-sm-7 ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowcol", []));
            echo ">
                            <div class='";
            // line 117
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharowcoldiv", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowcoldiv", []));
            echo ">
                                <div class='";
            // line 118
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharowcoldivdiv", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowcoldivdiv", []));
            echo " >
                                    <img src=\"";
            // line 119
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aLoadForm", []), "aCaptcha", []), "sImageUrl", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowcoldivdivimg", []));
            echo " />
                                </div>
                                <input id=\"";
            // line 121
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "captcharowcoldivinput", []));
            echo "\" class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "captcharowcoldivinput", []));
            echo " form-control' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "captcharowcoldivinput", []));
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 126
        echo "
                <!-- load button -->
                <div class='";
        // line 128
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadrow", []));
        echo " row form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadrow", []));
        echo ">
                    <div class='";
        // line 129
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadrowcol", []));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadrowcol", []));
        echo ">
                        <button class='";
        // line 130
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadrowcolbutton", []));
        echo " btn btn-default' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadrowcolbutton", []));
        echo " >
                            ";
        // line 131
        echo gT("Load now");
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 138
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "returntosurvey", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "returntosurvey", []));
        echo ">
            <div class=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "returntosurveydiv", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "returntosurveydiv", []));
        echo ">
                <a href=\"";
        // line 140
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "returntosurveydiva", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "returntosurveydiva", []));
        echo "  >";
        echo gT("Return to survey");
        echo "</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/load.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 140,  336 => 139,  330 => 138,  320 => 131,  314 => 130,  308 => 129,  302 => 128,  298 => 126,  286 => 121,  279 => 119,  273 => 118,  267 => 117,  261 => 116,  256 => 114,  250 => 113,  244 => 112,  241 => 111,  239 => 110,  232 => 106,  228 => 105,  218 => 102,  212 => 101,  208 => 100,  202 => 99,  196 => 98,  184 => 93,  178 => 92,  169 => 90,  163 => 89,  159 => 88,  153 => 87,  147 => 86,  139 => 83,  133 => 80,  129 => 78,  127 => 76,  126 => 74,  125 => 73,  124 => 72,  121 => 71,  118 => 65,  116 => 62,  114 => 59,  111 => 53,  107 => 51,  96 => 49,  92 => 48,  85 => 47,  83 => 46,  76 => 44,  67 => 40,  61 => 39,  55 => 38,  47 => 37,  41 => 36,  35 => 34,  32 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/load.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/content/load.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 46, "for" => 48, "set" => 59];
        static $filters = [];
        static $functions = ["gT" => 37, "count" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'count']
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
