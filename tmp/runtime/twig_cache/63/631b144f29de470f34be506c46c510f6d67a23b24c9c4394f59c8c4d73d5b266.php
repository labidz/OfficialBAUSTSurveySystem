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

/* answerOptionRow.twig */
class __TwigTemplate_983f89fd9ccc3dc81cb68abb1971c38e9ac3df14cc03bf744118f521fdcc040e extends \Twig\Template
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
        // line 16
        echo "
<tr
    class='row-container'
    id='row_";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "'
    data-common-id=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\"
>

    ";
        // line 24
        echo "    ";
        if (($context["first"] ?? null)) {
            // line 25
            echo "        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"fa fa-bars bigIcons move-icon\"
              role=\"button\"
              data-toggle=\"tooltip\"
              data-title=\"";
            // line 33
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">

            ";
            // line 40
            if (($context["oldCode"] ?? null)) {
                // line 41
                echo "            <input
                type='hidden'
                class='oldcode code-title'
                id='answeroptions[";
                // line 44
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "][oldcode]'
                name='answeroptions[";
                // line 45
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
                echo "][";
                echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "][oldcode]'
                value=\"";
                // line 46
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "code", []));
                echo "\"
            />
            ";
            }
            // line 49
            echo "
                <input
                    type='text'
                    class=\"code form-control input\"
                    id='answeroptions[";
            // line 53
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                    name='answeroptions[";
            // line 54
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][code]'
                    class='code code-title'
                    value=\"";
            // line 56
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "code", []));
            echo "\"
                    maxlength='5'
                    required='required'
                    onfocusout=\"LS.questionEditor.showAnswerOptionCodeUniqueError(this);\"
                />
        </td>
        ";
            // line 63
            echo "    ";
        } else {
            // line 64
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">&nbsp;</td>
        <!-- Code -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">";
            // line 67
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "code", []));
            echo "</td>
    ";
        }
        // line 69
        echo "
    <!-- Assessment Value -->
    ";
        // line 71
        if ((($context["assessmentvisible"] ?? null) && ($context["first"] ?? null))) {
            // line 72
            echo "        <td class=\"assessment-value\">
            <input
                type='text'
                class='assessment form-control input'
                id='answeroptions[";
            // line 76
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][assessment]'
                name='answeroptions[";
            // line 77
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][assessment]'
                value=\"";
            // line 78
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "assessment_value", []));
            echo "\"
                maxlength='5'
                size='5'
                onkeypress=\"returnwindow.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 84
($context["first"] ?? null)) {
            // line 85
            echo "        <td style='display:none;' class=\"assessment-value\">
            <input
                type='text'
                class='assessment'
                id='answeroptions[";
            // line 89
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][assessment]'
                name='answeroptions[";
            // line 90
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "][assessment]'
                value=\"";
            // line 91
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "assessment_value", []));
            echo "\"
                maxlength='5'
                size='5'
                onkeypress=\"returnwindow.LS.goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 97
($context["assessmentvisible"] ?? null)) {
            // line 98
            echo "        <td class=\"assessment-value\">
            ";
            // line 99
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "assessment_value", []));
            echo "
        </td>
    ";
        } else {
            // line 102
            echo "        <td style='display:none;' class=\"assessment-value\"></td>
    ";
        }
        // line 104
        echo "
    <!-- Answer -->
    <td  class=\"answeroption-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='answeroptions[";
        // line 112
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "][answeroptionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "]'
                name='answeroptions[";
        // line 113
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "aid", []));
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "][answeroptionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null));
        echo "]'
                placeholder='";
        // line 114
        echo gT("Some example answer option");
        echo "'
                data-contents-dir=\"";
        // line 115
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null)))) ? ("rtl") : ("ltr"));
        echo "\"
                value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOptionl10n"] ?? null), "answer", [])), "html_attr");
        echo "\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 119
        echo getEditor("editanswer", (((((("answeroptions[" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 121
($context["answerOption"] ?? null), "aid", []))) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null))) . "][answeroptionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null))) . "]"), (((("[" . gT("Answer option:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 122
($context["language"] ?? null))) . ")"), $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 123
($context["question"] ?? null), "sid", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 124
($context["question"] ?? null), "gid", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 125
($context["question"] ?? null), "qid", [])), "editanswer");
        // line 127
        echo "
            </span>
        </div>
    </td>

    <!-- Icons edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"answeroption-actions\">
        ";
        // line 134
        if (($context["first"] ?? null)) {
            // line 135
            echo "            <button type=\"button\" class=\"btn btn-default btn-sm btnaddanswer\">
                <i
                    class=\"icon-add text-success\"
                    data-assessmentvisible='";
            // line 138
            echo $this->sandbox->ensureToStringAllowed(($context["assessmentvisible"] ?? null));
            echo "'
                    data-position=\"";
            // line 139
            echo $this->sandbox->ensureToStringAllowed(($context["position"] ?? null));
            echo "\"
                    data-code=\"";
            // line 140
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["answerOption"] ?? null), "code", []));
            echo "\"
                    data-scale-id=\"";
            // line 141
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "\"
                    data-toggle=\"tooltip\"
                    data-placement=\"bottom\"
                    title=\"";
            // line 144
            echo gT("Insert a new answer option after this one");
            echo "\"
                ></i>
            </button>
            <button type=\"button\" class=\"btn btn-default btn-sm btndelanswer\">
                <i class=\"fa fa-minus-circle text-danger \" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 148
            echo gT("Delete this entry");
            echo "\"></i>
            </button>
        ";
        }
        // line 151
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "answerOptionRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 151,  307 => 148,  300 => 144,  294 => 141,  290 => 140,  286 => 139,  282 => 138,  277 => 135,  275 => 134,  266 => 127,  264 => 125,  263 => 124,  262 => 123,  261 => 122,  260 => 121,  259 => 119,  253 => 116,  249 => 115,  245 => 114,  237 => 113,  229 => 112,  219 => 104,  215 => 102,  209 => 99,  206 => 98,  204 => 97,  195 => 91,  189 => 90,  183 => 89,  177 => 85,  175 => 84,  166 => 78,  160 => 77,  154 => 76,  148 => 72,  146 => 71,  142 => 69,  137 => 67,  132 => 64,  129 => 63,  120 => 56,  113 => 54,  107 => 53,  101 => 49,  95 => 46,  89 => 45,  83 => 44,  78 => 41,  76 => 40,  66 => 33,  56 => 25,  53 => 24,  45 => 20,  37 => 19,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "answerOptionRow.twig", "/home/techinformation/public_html/application/views/questionAdministration/answerOptionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 24];
        static $filters = ["escape" => 116];
        static $functions = ["gT" => 33, "getLanguageRTL" => 115, "getEditor" => 119];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor']
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
